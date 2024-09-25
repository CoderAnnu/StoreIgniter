<script>
    // if user is Admin then they can use this Blog feature 
    Auth.onlyFor('logged-in', '/', 'admin');

    var quill;

    $timeout(function() {
        quill = new Quill('#editor', {
            theme: 'snow'
        });
    }, false);

    // get Slug suggestion by blog name 
    $scope.getBlogSlugSuggestions = (title) => {
        $http.get(`../../../api/admin/blog/slug-suggestions/${title}`).then(
            resp => {
                $scope.blog.slug = resp.data.slug;
            }
        )
    }

    // submit form data with Quill Editer paragraph 
    $scope.submit_form = (blog) => {
        const form_data = new FormData();

        // Bind Binary data as well as normal strings 
        angular.forEach(blog, function(val, key) {
            form_data.append(key, val);
        })

        const cont = quill.container.querySelector('.ql-editor').innerHTML;
        form_data.append('content', cont)

        $http.post(`../../../api/admin/blog/add/`, form_data, {
            transformRequest: angular.identity,
            headers: {
                'content-Type': undefined
            }
        }).then(
            resp => {
                console.log(resp)
                let notyf = new Notyf({
                    duration: 5000,
                    position: {
                        x: 'center',
                        y: 'top',
                    },
                    dismissible: true,
                });
                const success = resp.data.success;
                notyf.success(success);
                $location.path('/blogs')
            },
            err => {
                console.log(err)
                let notyf = new Notyf({
                    duration: 5000,
                    position: {
                        x: 'center',
                        y: 'top'
                    },
                    dismissible: true
                });
                const error = err.data.messages.error;
                notyf.error(error);
            })
    }


    // Blog image upload image files 
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
    }
</script>