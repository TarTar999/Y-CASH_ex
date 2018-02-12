angular.module("Y-CASH", ['ui.bootstrap.contextMenu'])

                
.controller("HomeCtrl",function ($scope) {

       
})



.controller("MatiereCtrl",function ($scope) {


})




.factory('GetprofFactory', function($http){
    return {
        getProf: function() {
            return  $http({
            method: 'GET',
            url: '../API/serveur-connection.php',
            params:{"action":"GetUseronline"}
            })
        }
    };
})

.factory('MatiereprofFactory', function($http){
    return {
        getMatieres: function(id) {
            return  $http({
            method: 'GET',
            url: '../API/serveur.php',
            params:{"action":"Matiere_prof",
                    "ID_PARCOUR":id}
            })
        }
    };
})

