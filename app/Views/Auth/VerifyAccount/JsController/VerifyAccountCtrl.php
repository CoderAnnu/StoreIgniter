<script>
    Auth.onlyFor('logged-out', '/');

    $scope.loading = false;
    $scope.completed = false;

    $scope.verifyAccount = (user) => {
        $scope.loading = true;

        // Sending a verification code by Angular js post method
        $http.post('../../../api/auth/account-verify', user).then(
            resp => {
                let notyf = new Notyf({
                    duration: 5000,
                    position: {
                        x: 'center',
                        y: 'top'
                    },
                    dismissible: true,
                });

                const success = resp.data.message;

                // Display a success Notification
                notyf.success(success);
                let input = document.getElementById('VerifyEmail').value = '';
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

                const error = err.data.messages.error;
                // Display Error Status by Notification 
                notyf.error(error);
                $scope.loading = false;
            }
        )
    }
</script>