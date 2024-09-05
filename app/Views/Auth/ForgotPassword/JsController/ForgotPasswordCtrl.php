<script>
    Auth.onlyFor('logged-out', '/');

    $scope.loading = false;
    $scope.completed = false;

    $scope.ForgotPassword = (user) => {
        $scope.loading = true;
        $http.post('../../../api/auth/forgot-password', user).then(
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
                let input = document.getElementById('ForgotPasswordEmail').value = '';
                $scope.loading = false;
                $scope.completed = true;

            }, err => {
                let notyf = new Notyf({
                    duration: 5000,
                    position: {
                        x: 'center',
                        y: 'top',
                    },
                    dismissible: true,
                });
                const error = err.data.messages.message;

                // Display a error Notification 
                notyf.error(error);
                $scope.loading = false;
            }
        )
    }
</script>