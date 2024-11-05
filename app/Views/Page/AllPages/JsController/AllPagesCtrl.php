<script>
    Auth.onlyFor('logged-in', '/', 'admin');

    $scope.loading = false;
    $scope.pagination_loading = false;

    $scope.config = {
        page: 1,
        query: null,
        filter: "all"
    }

    $scope.updateFilter = (filer_val) => {
        $scope.config.filter = filer_val;
        $scope.config.page = 1;
        $scope.get_pages();
    }

    $scope.search_pages = () => {
        // Reset Page
        $scope.config.page = 1;
        $scope.get_pages();
    }

    $scope.get_pages = () => {
        $scope.loading = true;

        if ($scope.config.page > 1 && $scope.pages.next_page) {
            $scope.pagination_loading = true;
        }

        $http.get(`../../../api/admin/pages?${($scope.config.page !== null ) ? `page=${$scope.config.page}` : ''}${($scope.config.query !== null) ? `&query=${$scope.config.query}` : ''}`).then(
            resp => {
                $scope.loading = false;
                $scope.pagination_loading = false;

                if ($scope.config.page > 1) {
                    // Pagination Updatex`
                    $scope.pages.next_page = resp.data.next_page;
                    $scope.pages.current_page = resp.data.current_page;
                    $scope.pages.total_items = resp.data.total_items;

                    $scope.pages.items = [...$scope.pages.items, ...resp.data.items];
                } else {
                    $scope.pages = resp.data;
                }

                console.log($scope.pages);
            },
            err => {
                $scope.loading = false;
                $scope.pagination_loading = false;
                console.log(err);
            }
        )

    }

    window.onscroll = function() {
        if (window.innerHeight + window.pageYOffset >= document.body.offsetHeight) {
            if (!$scope.loading) {
                if ($scope.pages.next_page) {
                    $scope.config.page = $scope.config.page + 1;
                    $scope.get_pages();
                }
            }
        }
    }
    // Init
    $scope.get_pages();


    // delete page from datebase by admin 
    $scope.delete_page = (page, index) => {

        const modal = $(`#delete_page_modal_${index}`);

        $scope.loading = true;
        $http.get(`../../../api/admin/page/delete/${page}`).then(
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

                console.log($scope.pages.items, index)
                $scope.pages.items[index] = resp.data.page;

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
    // Restore user 
    $scope.restorePage = (page, index) => {
        const modal = $(`#restore_page_modal_${index}`);

        $scope.loading = true;
        $http.get(`../../../api/admin/page/restore/${page}`).then(
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
                $scope.pages.items[index] = resp.data.page;

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


    // delete page from datebase by admin 
    $scope.delete_page_permanent = (page, index) => {
        $scope.loading = true;

        const modal = $(`#delete_page_modal_p${index}`);

        $http.get(`../../../api/admin/page/permanent_delete/${page}`).then(
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

                console.log($scope.pages.items, index)

                // Remove item from an array
                $scope.pages.items.splice(index, 1);


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
</script>