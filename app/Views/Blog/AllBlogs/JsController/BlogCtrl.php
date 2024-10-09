<script>
    Auth.onlyFor('logged-in', '/', 'admin');


    $scope.loading = false;
    $scope.pagination_loading = false;

    $scope.config = {
        page: 1,
        query: null,
        filter: "all"
    }

    $scope.search_blogs = () => {
        // Reset Page
        $scope.config.page = 1;
        $scope.get_blogs();
    }

    $scope.get_blogs = () => {
        $scope.loading = true;

        if ($scope.config.page > 1 && $scope.blogs.next_page) {
            $scope.pagination_loading = true;
        }

        $http.get(`../../../api/admin/blogs?${($scope.config.page !== null ) ? `page=${$scope.config.page}` : ''}${($scope.config.query !== null) ? `&query=${$scope.config.query}` : ''}`).then(
            resp => {
                $scope.loading = false;
                $scope.pagination_loading = false;

                if ($scope.config.page > 1) {
                    // Pagination Update
                    $scope.blogs.next_page = resp.data.next_page;
                    $scope.blogs.current_page = resp.data.current_page;
                    $scope.blogs.total_items = resp.data.total_items;

                    $scope.blogs.items = [...$scope.blogs.items, ...resp.data.items];
                } else {
                    $scope.blogs = resp.data;
                }

                console.log($scope.blogs);
            },
            // err => {
            //     $scope.loading = false;
            //     $scope.pagination_loading = false;
            //     console.log(err);
            // }
            err => {
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
                $scope.loading = false;
                $scope.pagination_loading = false;
                console.log(err);
            }
        )
    }

    window.onscroll = function() {
        if (window.innerHeight + window.pageYOffset >= document.body.offsetHeight) {
            if (!$scope.loading) {
                if ($scope.blogs.next_page) {
                    $scope.config.page = $scope.config.page + 1;
                    $scope.get_blogs();
                }
            }
        }
    }
    // Init
    $scope.get_blogs();


    // delete page from datebase by admin 
    $scope.delete_blog = (page, index) => {

        const modal = $(`#delete_blog_modal_${index}`);

        $scope.loading = true;
        $http.get(`../../../api/admin/blog/delete/${page}`).then(
            resp => {
                let notyf = new Notyf({
                    duration: 5000,
                    position: {
                        x: 'center',
                        y: 'top',
                    },
                    dismissible: true,
                });
                const success = resp.data;


                // Close Modal
                modal.modal('hide');

                // Display a success notification
                notyf.success(success);
                $scope.loading = false;

                // console.log($scope.blogs.items, index);
                console.log(resp.data.blog)

                $scope.blogs.items[index] = resp.data.blog;

            },
            err => {
                let notyf = new Notyf({
                    duration: 5000,
                    position: {
                        x: 'center',
                        y: 'top',
                    },
                    dismissible: true,
                });


                // Close Modal
                modal.modal('hide');

                const error = err.data.messages.error;
                // Display a success notification
                notyf.error(error);
                $scope.loading = false;
                console.log(err);
            }
        )
    }
    // Restore blog 
    $scope.restoreBlog = (blog, index) => {
        const modal = $(`#restore_blog_modal_${index}`);
        $scope.loading = true;
        $http.get(`../../../api/admin/blog/restore/${blog}`).then(
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
                // Close Modal
                modal.modal('hide');

                // Display a success notification
                notyf.success(success);
                $scope.loading = false;
                $scope.blogs.items[index] = resp.data.blog;

            },
            err => {
                let notyf = new Notyf({
                    duration: 5000,
                    position: {
                        x: 'center',
                        y: 'top',
                    },
                    dismissible: true,
                });

                // Close Modal
                modal.modal('hide');

                const error = err.data.messages;
                // Display a success notification
                notyf.error(error);
                $scope.loading = false;
                console.log(err);
            }
        )
    }


    // delete blog permanently from datebase by admin 
    $scope.delete_blog_permanent = (blog, index) => {
        $scope.loading = true;

        const modal = $(`#delete_blog_modal_p${index}`);

        $http.get(`../../../api/admin/blog/permanent_delete/${blog}`).then(
            resp => {
                let notyf = new Notyf({
                    duration: 5000,
                    position: {
                        x: 'center',
                        y: 'top',
                    },
                    dismissible: true,
                });
                const success = resp.data;

                // Close Modal
                modal.modal('hide');

                // Display a success notification
                notyf.success(success);
                $scope.loading = false;

                console.log($scope.blogs.items, index)

                // Remove item from an array
                $scope.blogs.items.splice(index, 1);

            },
            err => {
                let notyf = new Notyf({
                    duration: 5000,
                    position: {
                        x: 'center',
                        y: 'top',
                    },
                    dismissible: true,
                });


                // Close Modal
                modal.modal('hide');

                const error = err.data;
                // Display a success notification
                notyf.error(error);
                $scope.loading = false;
                console.log(err);
            }
        )
    }
</script>