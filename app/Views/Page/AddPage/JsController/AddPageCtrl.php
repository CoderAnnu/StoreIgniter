<script>
    Auth.onlyFor('logged-in', '/', 'admin');

    var quill;

    // Load Quill
    $timeout(function() {
        quill = new Quill('#editor', {
            theme: 'snow'
        });
    }, false);


    $scope.getSlugSuggestions = (title) => {

        $http.get(`../../../api/admin/pages/slug-generator/${title}`).then(
            resp => {
                $scope.page.slug = resp.data.slug;
            }
        )
    }

    $scope.addPage = (page) => {
        const content = quill.container.querySelector('.ql-editor').innerHTML;

        page.description = content;
        $http.post('../../../api/admin/page/add', page).then(
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
                // Display a success notification
                notyf.success(success);
                $location.path('/pages');

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
                // Display a error notification
                notyf.error(error);
            })
    }
</script>