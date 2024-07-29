
$(document).ready(function(){
    
  google.charts.load('current', {'packages':['corechart']});
     google.charts.setOnLoadCallback(drawChart);

     function drawChart() {

       var data = google.visualization.arrayToDataTable([
         ['Task', 'Hours per Day'],
         ['Laki-laki : 1.968',     58],
         ['Perempuan : 1.958',      42]
       ]);

       var options = {
         title: 'Statistik Jenis Kelamin',
         is3D:true
       };

       var chart = new google.visualization.PieChart(document.getElementById('jeniskelamin'));

       chart.draw(data, options);
     } 
   
   
});
                  
$(document).ready(function(){
    
  google.charts.load('current', {'packages':['corechart']});
     google.charts.setOnLoadCallback(drawChart);

     function drawChart() {

       var data = google.visualization.arrayToDataTable([
         ['Task', 'Hours per Day'],
         ['Islam : 3.923',     97],
         ['Kristen : 3',      3],
       
       ]);

       var options = {
         title: 'Statistik Agama',
         is3D:true
       };

       var chart = new google.visualization.PieChart(document.getElementById('penduduk'));

       chart.draw(data, options);
     } 
   
   
});
                       