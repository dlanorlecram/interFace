var app = angular.module("appInter",[]);

app.config(function($interpolateProvider){

  $interpolateProvider.startSymbol('{[{').endSymbol('}]}');
  
});

app.controller("effect", function($scope){


  $scope.statusCheck = function(value){
    console.log(value);
    /*if (value = true){
      value = {
        'visibility': 'visible'
      }
      return value;
    }
    else{
      value = {
        'visibility': 'hidden'
      }
      return value;
    }*/
  }
});
