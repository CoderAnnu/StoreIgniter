<script>
    Auth.onlyFor('logged-in', '/', 'admin');
    var quill;
    $scope.page_id = $routeParams.key


    // Load Quill
    $timeout(function() {
        quill = new Quill('#editor', {
            theme: 'snow'
        });
    }, false)



    $scope.getSlugSuggestions = (title) => {

        $http.get(`../../../api/admin/pages/slug-generator/${title}`).then(
            resp => {
                $scope.data.slug = resp.data.slug;
            }
        )
    }

    $http.get(`../../../api/admin/page/edit/${$scope.page_id}`).then(
        resp => {
            $scope.data = resp.data;
            var delta = quill.clipboard.convert(resp.data.description);
            quill.setContents(delta, 'silent');
            console.log(resp.data);
        },
        err => {
            console.log(err);
        }
    )

    $scope.updatePage = (data) => {
        const content = quill.container.querySelector('.ql-editor').innerHTML;

        data.description = content;
        $http.post(`../../../api/admin/page/update/${$scope.page_id}`, data).then(
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
</script>