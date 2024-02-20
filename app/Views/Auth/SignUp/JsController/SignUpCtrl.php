<script>
    Auth.onlyFor('loggout-out', '/');

    $scope.addUser = (user) => {

        $http.post('../../../api/auth/create', user).then(
            // success message Response
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
                // Display a success notification
                notyf.success(success);

                // Get input field empty 
                let input = document.getElementById('signUpUsername').value = '';
                let input2 = document.getElementById('signUpEmail').value = '';
                let input3 = document.getElementById('SignUpPassword').value = '';

                // Redirect after succesfully signup
                $location.path('/signin');
            },
            // Error message Response
            err => {
                let notyf = new Notyf({
                    duration: 5000,
                    position: {
                        x: 'center',
                        y: 'top',
                    },
                    dismissible: true,
                });

                const error = err.data.message.message;

                // display on error Notification
                notyf.error(error);
            }
        )
    }
</script>