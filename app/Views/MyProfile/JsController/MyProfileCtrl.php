<script>
    Auth.onlyFor('logged-in', '/');

    $scope.userProfile = (user) => {
        // $scope.name = user.name;
        let data = {
            'full_name': user.full_name,
            'email': user.email,
            'contact': user.contact,
        }
        $http.post('../../../api/user/profile', data).then(
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
                notyf.success(success);
                // console.log(resp.data);
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
                const error = err.data.messages.error;
                // Display an error notification
                notyf.error(error);
            }
        )

    }
</script>