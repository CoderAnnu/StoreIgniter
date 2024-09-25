<script>
    Auth.onlyFor('logged-in', '/', 'admin');

    let quill;
    $scope.blog_id = $routeParams.key

    // load Quill
    $timeout(function() {
        quill = new Quill('#editor', {
            theme: 'snow'
        });
    }, false);


    // $scope.getSlugSuggestions = (title) => {
    //     $http.get(`../../../api/admin/blog/edit/${title}`).then(
    //         resp => {
    //             console.log(resp);
    //         }
    //     );
    // }


    $http.get(`../../../api/admin/blog/edit/${$scope.blog_id}`).then(
        resp => {
            console.log(resp.data);
            $scope.data = resp.data;
            var delta = quill.clipboard.convert(resp.data.content);
            quill.setContents(delta, 'silent');



        },
        err => {}
    )


    $scope.updateBlog = (data) => {
        const content = quill.container.querySelector('.ql-editor').innerHTML;

        const form_data = new FormData();
        // Bind Binary data as well as normal Strings
        angular.forEach(data, function(val, key) {
            form_data.append(key, val);
        })

        form_data.append('content', content)

        $http.post(`../../../api/admin/blog/update/${$scope.blog_id}`, form_data, {
            transformRequest: angular.identity,
            headers: {
                'Content-Type': undefined
            }
        }).then(
            resp => {
                console.log(resp);
                let notyf = new Notyf({
                    duration: 5000,
                    position: {
                        x: 'center',
                        y: 'top',
                    },
                    dismissible: true,
                });

                const success = resp.data.message;
                // Display an error notification
                notyf.success(success);
                $location.path('/blogs');

            },
            err => {
                console.log(err);

                let notyf = new Notyf({
                    duration: 5000,
                    position: {
                        x: 'center',
                        y: 'top',
                    },
                    dismissible: true,
                });

                const error = err.data.messages.error;
                // Display an error notification
                notyf.error(error);

            }
        )
    }

    $scope.uploadedFile = function(element) {

        $scope.currentFile = element.files[0];
        var reader = new FileReader();
        
        reader.onload = function(event) {
            $scope.image_source = event.target.result
            $scope.$apply(function($scope) {
                $scope.files = element.files;
            });
        }
        reader.readAsDataURL(element.files[0]);
    };
</script>