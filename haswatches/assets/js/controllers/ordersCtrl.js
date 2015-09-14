var base_url = "http://localhost:81/haswatches/haswatches/assets/database";

app.controller('orders', ['$scope', '$http',
    function ($scope, $http) {

        order = [];
        $scope.orders = [];
        $scope.subcategories = [];
        $scope.products = [];

        //fetch designer categories with a promise
        function getOrders() {
            $http.get(base_url + "/getOrders.php")
                .success(function(order) {
                    $scope.orders = order;
                    console.log(order);
                });
        };
        getOrders();
    }
        
        //return;
    
]);