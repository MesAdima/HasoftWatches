'use strict';
/** 
  * controller for User Profile Example
*/
app.controller('UserCtrl', ["$scope", "flowFactory", function ($scope, flowFactory) {
    $scope.removeImage = function () {
        $scope.noImage = true;
    };
    $scope.obj = new Flow();

    $scope.userInfo = {
        firstName: 'Brian',
        lastName: 'Mugambi',
        url: 'www.haswatches.com',
        email: 'brianmugambi@gmail.com',
        phone: '0718-877-997',
        gender: 'male',
        zipCode: '12345',
        city: 'Nairobi (KE)',
        avatar: 'assets/images/avatar-3.jpg',
        twitter: '',
        github: '',
        facebook: '',
        linkedin: '',
        google: '',
        skype: 'brian.mugambi'
    };
    if ($scope.userInfo.avatar == '') {
        $scope.noImage = true;
    }
}]);