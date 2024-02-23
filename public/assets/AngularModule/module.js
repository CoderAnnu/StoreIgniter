

const app = angular.module('myApp', ['ngRoute']);

app.controller("globalCtrl", function ($window, $scope, $rootScope, $interval, $location, $http, $compile) {
    // Here we can add Global Functions 
    $scope.activateView = function (ele, controller) {
        controller($scope, $http);
        $compile(ele.contents())($scope);
        $scope.$apply();
    };

    $interval(function () {
        try {
            if ($window.auth_state !== undefined) {
                $scope.user = $window.auth_state.data;
                $window.admin = $scope.user.status;

            }
        } catch (error) {
        }
    }, false);

    $scope.get_path = () => {
        return $location.path();
    }


    //Global psssword hide and show eye button
    $scope.showPassword = function (elem, $element) {

        const eye_element = $element.target;
        elem = document.querySelector(`#${elem}`);
        const state = elem.type;

        switch (state) {
            case 'password':
                elem.type = 'text';
                eye_element.classList.remove('fa-eye');
                eye_element.classList.add('fa-eye-slash');
                break;
            default:
                elem.type = 'password';
                eye_element.classList.remove('fa-eye-slash');
                eye_element.classList.add('fa-eye');
                break;
        }
    }
});


app.service('fileUpload', ['$http', function ($http) {
    this.uploadFileToUrl = function (file, uploadUrl) {
        var fd = new FormData();
        fd.append('file', file);

        $http.post(uploadUrl, fd, {
            transformRequest: angular.identity,
            headers: { 'Content-Type': undefined }
        }).then(resp => {
            console.log(resp);
        })
    }
}]);





app.directive('fileModel', ['$parse', function ($parse) {
    return {
        restrict: 'A',
        link: function (scope, element, attrs) {
            var model = $parse(attrs.fileModel);
            var modelSetter = model.assign;

            element.bind('change', function () {
                scope.$apply(function () {
                    modelSetter(scope, element[0].files[0]);
                });
            });
        }
    };
}]);




app.service('Auth', ["$http", "$window", "$interval", "$location", "$rootScope", function ($http, $window, $interval, $location, $rootScope) {

    let ctx = this;

    // Get the latest state of user directly from the server
    // Data types : Boolean, Number, String, Method/Function, NULL\
    this.checker = (fn = null) => {

        $window.request_active = true;

        $http.get(`../../../api/auth/get_state`).then(

            resp => {
                $window.request_active = false;

                /* Someone's calling */
                // if (resp.data.data.calling) {
                //     showCallingAlert.calling(resp.data.data.calling.peer_id, resp.data.data.calling.visitor_id);
                // }

                resp.data._time = Math.floor(new Date().getTime() / 1000);
                if (fn !== null) {
                    fn(resp.data);
                }

                ctx.setState(resp.data);
            },
            err => {
                $window.request_active = false;
            }
        )
    }

    // Set the new state of user
    this.setState = ($val) => {
        $window.auth_state = $val;
    }

    // Get the current auth state of user
    this.getState = (fn, cache = true) => {

        if ($window.request_active == undefined) $window.request_active = false;

        if (cache) {
            // To get data with cache
            if ($window.auth_state == undefined) {
                // Get latest from server
                if ($window.request_active == false)
                    ctx.checker(fn);
                return;

            } else {
                // Get from Cache
                const state = $window.auth_state;
                const time_difference = (Math.floor(new Date().getTime() / 1000) - state._time);

                // Check validity of cache 
                if (time_difference > 1) {
                    // Get new state from server
                    if ($window.request_active == false) ctx.checker(fn);
                } else {
                    fn(state);
                }
            }
        } else {
            // To get latest data
            ctx.checker(fn);
        }

    }

    /* Redirect on the basis of auth state
    - logged-in
    - logged-out
    */
    this.main = ($for = null, $redirect_to = null, $role = 'all') => {
        ctx.getState(state_object => {
            if ($for !== null && $redirect_to !== null) {
                let _state = null;
                if (state_object.state) _state = 'logged-in';
                if (!state_object.state) _state = 'logged-out';

                // Check for auth state
                if ($for !== _state) {
                    console.table({
                        for: $for,
                        _state: _state,
                        object: state_object
                    })

                    $location.path($redirect_to);
                } else {
                    //  Check fole roles
                    if ($role == 'admin' && state_object.data.role != 'admin') {
                        $location.path($redirect_to);
                    }

                }
            }
        });
    }

    this.onlyFor = ($for, $redirect_to, $role = 'all') => {
        // Get current state
        const intervalService = $interval(function () {
            console.log("Get State Called");
            ctx.main($for, $redirect_to, $role);
        }, 1000)

        // Stop when page changed
        $rootScope.$on('$routeChangeSuccess', function () {
            $interval.cancel(intervalService);
        });

        //Init 
        ctx.main($for, $redirect_to, $role);
    }

    this.getLatestState = () => ctx.getState(null, false);

}]);

app.directive('userData', ["$window", "$timeout", "$interval", function ($window, $timeout, $interval) {
    return {
        link: function (scope, el, attrs) {
            const element = el[0];
            const get_data = () => {
                if ($window.auth_state != undefined && $window.auth_state.data != undefined) {
                    element.innerHTML = $window.auth_state.data[attrs.userData];
                }
            }
            // Init
            // Get data every second
            $interval(function () {
                get_data()
            }, false);

        }
    }
}])

app.directive('elastic', [
    '$timeout',
    function ($timeout) {
        return {
            restrict: 'A',
            link: function ($scope, element) {
                $scope.initialHeight = $scope.initialHeight || element[0].style.height;
                var resize = function () {
                    element[0].style.height = $scope.initialHeight;
                    element[0].style.height = "" + element[0].scrollHeight + "px";
                };
                element.on("input change", resize);
                $timeout(resize, 0);
            }
        };
    }
]);

app.service('logoutService', ['$http', '$window', '$location', function ($http, $window, $location) {
    this.logout = (redirect = '/signin', succ, fail) => {

        $http.post('../../api/auth/logout').then(
            resp => {
                if (succ) {
                    succ(resp);
                } else {
                    let notyf = new Notyf({
                        duration: 5000,
                        position: {
                            x: 'center',
                            y: 'top',
                        },
                        dismissible: true,
                    });
                    const success = resp.data.message;
                    // Display a success notification
                    notyf.success(success);
                    $window.auth_state = null;
                    $location.path(redirect);
                }

            },
            err => {
                if (fail) {
                    fail();
                } else {

                    let notyf = new Notyf({
                        duration: 5000,
                        position: {
                            x: 'center',
                            y: 'top',
                        },
                        dismissible: true,
                    });
                    const error = err.data.messages.message;
                    // Display a success notification
                    notyf.error(error);
                }
            }
        )
    }
}])

app.directive('logoutButton', ["$http", "$location", "$window", "logoutService", function ($http, $location, $window, logoutService) {
    return {
        link: function (scope, elem, attrs) {

            const redirect = attrs.logoutButton;
            const button = elem[0];

            button.addEventListener('click', (e) => {
                logoutService.logout(redirect);
            });
        }
    }
}]);

app.filter('dateFormat', function () {
    return function (date_str) {
        const date = new Date(date_str);

        return date.toDateString()
    }
})

