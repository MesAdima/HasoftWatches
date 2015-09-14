//base url declaration
var base_url = "http://localhost:81/haswatches/haswatches/assets/database";

app.controller('user', ['$scope', '$http',
    function($scope, $http) {
        users = [];
        $scope.users = [];
        
        //post a user
        $scope.adduser = function() {
            // alert(base_url + "/addCategories.php?action=add_category");return;
            $http.post(base_url + "/addUser.php?action=add_user", {
                    'fname': $scope.fname,
                    'sname': $scope.sname,
                    'email': $scope.email,
                    'phone_number': $scope.phone
                }

            ).success(function(data, status, headers, config) {
                console.log('user added ', data);
                $scope.demo3();
            });
        }

        //fetch users with a promise
        function getUsers() {
            $http.get(base_url + "/getUsers.php")
                .success(function(users) {
                    $scope.users = users;
                    console.log(users);
                    return;
                });
        };

        $scope.update = function() {

            var w = $http.post(base_url + "/updateUser.php?action=update_user", {
                'id': $scope.user._id,
                'fname': $scope.fname,
                'sname': $scope.user.sname,
                'email': $scope.user.email,
                'phone_number': $scope.user.phone
            })
                .success(function(data, status, headers, config) {
                    //console.log(w);return;
                    //getUsers();
                })
                .error(function(data, status, headers, config) {
                    alert("Failed");return;
                });
        }

        getUsers();
    }
]);

app.controller('ngTableCtrl6', ["$scope", "$filter", "ngTableParams",
    function($scope, $filter, ngTableParams) {

        $scope.tableParams = new ngTableParams({
            page: 1,
            count: 10
        }, {
            total: data.length,
            getData: function($defer, params) {
                var orderedData = params.sorting() ? $filter('orderBy')(data, params.orderBy()) : data;
                $defer.resolve(orderedData.slice((params.page() - 1) * params.count(), params.page() * params.count()));
            }
        });

        $scope.editId = -1;

        $scope.setEditId = function(uid) {
            $scope.editId = uid;
        };
    }
]);