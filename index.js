//    $(document).ready(function(){

//     filter_data();

//     function filter_data()
//     {
//         $('.filter_data').html('<div id="loading" style="" ></div>');
//         var action = 'fetch_data.php';
        
//         var brand = get_filter('brand');
        
       
//         $.ajax({
//             url:"fetch_data.php",
//             method:"POST",
//             data:{action:action,brand:brand},
//             success:function(data){
//                 $('.filter_data').html(data);
//             }
//         });
//     }

//     function get_filter(class_name)
//     {
//         var filter = [];
//         $('.'+class_name+':checked').each(function(){
//             filter.push($(this).val());
//         });
//         return filter;
//     }

//     $('.common_selector').click(function(){
//         filter_data();
//     });


//    });
 $(Document).ready(function(){


     var $grid = $(".grid").isotope({
         itemSelector : '.grid-item',
         layoutMode : 'fitRows'
     });

     // filter items on button click
     $(".list-group").on("click", "button", function(){
         var filterValue = $(this).attr('data-filter');
         $grid.isotope({ filter: filterValue});
     })
 })




