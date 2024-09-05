<script>
    Auth.onlyFor('logged-in', '/', 'admin');

    $scope.loading = false;
    $scope.user_id = $routeParams.key;

    $http.get(`../../../api/admin/user/edit/${$scope.user_id}`).then(
        resp => {
            console.log(resp.data);
            $scope.data = resp.data;
        },
        err => {
            console.log(err);
            err.data
        }
    )

    $scope.updateUserMeta = (data) => {
        $scope.loading = true;
        $http.post(`../../../api/admin/user/update/${$scope.user_id}`, data).then(
            resp => {
                let notyf = new Notyf({
                    duration: 5000,
                    position: {
                        x: 'center',
                        y: 'top',
                    },
                    dismissible: true,
                });

                const success = resp.data.message;

                // Display a success Notification
                notyf.success(success);
                $scope.loading = false;
                console.log(resp);
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
                const error = err.data.message;
                // Display a error message Notification
                notyf.error(error);
                $scope.loading = false;
                console.log(err);
            }
        )
    }
</script>