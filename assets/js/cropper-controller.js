angular.module('app').controller("ImageCropperCtrl",[ '$scope', function($scope) 
{
        $scope.bounds = {};
        $scope.cropper = {};
        $scope.cropper.sourceImage = null;
        $scope.cropper.croppedImage   = null;
        $scope.bounds = {};
        $scope.bounds.left = 10;
        $scope.bounds.right = 100;
        $scope.bounds.top = 00;
        $scope.bounds.bottom = 00;
}]);