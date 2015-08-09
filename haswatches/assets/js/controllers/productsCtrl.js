//define controller with all the tasks
app.controller('product', function($scope, $http) {
	$scope.categories = [];
    //fetch designer categories with a promise
    getCategories();

    function getCategories() {
        $http.get("database/getCategories.php")
            .success(function (category) {
                $scope.categories = category;
            });
            console.log($scope.categories);
            return;
    };

});