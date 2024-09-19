<script>
    // only Admin can use this functionality 
    Auth.onlyFor('logged-in', '/', 'admin');

    $scope.loading = false;
    $scope.pagination_loading = false;

    $scope.config = {
        page: 1,
        query: null,
        filter: "all"
    }

    $scope.search_user = () => {
        // Reset Page
        $scope.config.page = 1;
        $scope.get_users();
    }

    $scope.updateFilter = (filer_val) => {
        $scope.config.filter = filer_val;
        $scope.config.page = 1;
        $scope.get_users();
    }

    $scope.get_users = () => {
        $scope.loading = true;

        if ($scope.config.page > 1 && $scope.user.next_page) {
            $scope.pagination_loading = true;
        }

        $http.get(`../../../api/admin/users?${($scope.config.page !== null ) ? `page=${$scope.config.page}` : ''}${($scope.config.query !== null) ? `&query=${$scope.config.query}` : ''}${($scope.config.filter !== null) ? `&filter=${$scope.config.filter}` : ''}`).then(
            resp => {
                $scope.loading = false;
                $scope.pagination_loading = false;

                if ($scope.config.page > 1) {
                    // Pagination Updatex`
                    $scope.user.next_page = resp.data.next_page;
                    $scope.user.current_page = resp.data.current_page;
                    $scope.user.total_items = resp.data.total_items;

                    $scope.user.items = [...$scope.user.items, ...resp.data.items];
                } else {
                    $scope.user = resp.data;
                }
            },
            err => {
                $scope.loading = false;
                $scope.pagination_loading = false;
                console.log(err);
            }
        )
    }


    // Change Role
    $scope.change_role = (user) => {
        $scope.loading = true;
        $http.post(`../../../api/admin/user/update/role/${user.id}`, {
            role: user.role,
            status: user.status
        }).then(
            resp => {
                $scope.loading = false;
                console.log(resp);
            },
            err => {
                $scope.loading = false;
            }
        )
    }

    // When scroll then data fetch continue scrolling 
    window.onscroll = function() {
        if (window.innerHeight + window.pageYOffset >= document.body.offsetHeight) {
            if (!$scope.loading) {
                if ($scope.user.next_page) {
                    $scope.config.page = $scope.config.page + 1;
                    $scope.get_users();
                }
            }
        }
    }
    // Init
    $scope.get_users();

    // Restore user 
    $scope.restoreUser = (user, index) => {
        const modal = $(`#restore_modal_${index}`);

        $scope.loading = true;
        $http.get(`../../../api/admin/user/restore/${user}`).then(
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
                $scope.user.items[index] = resp.data.user;
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
                const error = err.data;
                // Display a success notification
                notyf.error(error);
                $scope.loading = false;
                console.log(err);
            }
        )
    }

    // $scope.loading = false;
    // delete user from datebase by admin 
    $scope.delete_user = (user, index) => {

        const modal = $(`#delete_modal_${index}`);

        $scope.loading = true;
        $http.get(`../../../api/admin/user/delete/${user}`).then(
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

                $scope.user.items[index] = resp.data.user;
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

                const error = err.data.messages.message;
                // Display a success notification
                notyf.error(error);
                $scope.loading = false;
                console.log(err);
            }
        )
    }
</script>