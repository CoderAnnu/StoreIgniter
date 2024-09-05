<script>
    let $ctrl = this;

    $ctrl.$onInit = () => {

        $interval(function() {
            $ctrl.path = $location.path();
            try {
                if ($window.auth_state != undefined)
                    $scope.user = $window.auth_state.data;
            } catch (error) {

            }
        }, false)
    }
</script>