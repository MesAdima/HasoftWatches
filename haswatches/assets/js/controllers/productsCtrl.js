//base url declaration
var base_url = "http://localhost:81/haswatches/haswatches/assets/database";

app.controller('product', function($scope, $http) {
    category = [];
    subcategory = [];
    $scope.categories = [];
    $scope.subcategories = [];

    //fetch designer categories with a promise
    function getCategories() {
        $http.get(base_url + "/getCategories.php")
            .success(function (category) {
                $scope.categories = category;
                console.log(category);
            });
    };

    //fetch subcategories with a promise
    function getSubCategories() {
        $http.get(base_url + "/getSubCategories.php")
            .success(function (subcategory) {
                $scope.subcategories = subcategory;
                console.log($scope.subcategories);
            });
    };

    //post a category
    $scope.addcategories = function (){
        $http.post('base_url + "/addCategories.php"', {'category_name': $scope.category_name, 'description': $scope.descrp}
            ).
        }
    }

    getCategories();
    getSubCategories();
});