/*var app = angular.module("appInter",[]);*/

/*app.config(function($interpolateProvider){

  $interpolateProvider.startSymbol('{[{').endSymbol('}]}');

});*/

/*app.controller("searchCtrl", function($scope){
  $scope.dataJ;
  console.log($scope.dataJ);
});
*/

/*
{% for demandeur in demandeurs %}
  {% autoescape %}
  var dede = {{demandeur |raw }};
  {% endautoescape %}
  console.log("Adding dede : "+dede);
  stck.push(dede);
{% endfor %}-->
console.log(stck);
*/


/*<script>
var app = angular.module("appInter", []);

app.controller("searchCtrl", function($scope){


});
  var json = [];
  {% for demandeur in demandeurs %}
  var data =  {{demandeur|raw}};
  console.log(data);
  json.push(data);
  {% endfor %}
  console.log(json[0].nom);
</script>*/
