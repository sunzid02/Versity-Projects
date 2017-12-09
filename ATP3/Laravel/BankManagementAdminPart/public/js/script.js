"use strict";

  /*.......................javascript..................*/
// // alert("Entering test.html file");
//         //Array
// /*page load howa matroi eita execute hobe jodi alert ar age function f1()
// {
//   alert(); na likhi
// }
// */
//
// // var a = new Array(5);
//   /*
//       Evabe lekhle amar a akta array ase,jar index ase 5ta
//       prottek index ar value 5
//   */
//
//
// // var b =[5];
// /*
//   b array ar akta element ase jar value holo 5
// */
//
// var a = [2,4,6,8];
//
// var f2 = function(){
//     //alert('this is some function'); // called annonymous function, karon kono naam nai
//     return 1427485335847241;
// }
//
//
// //function
// //after pageloading the function will execute
// // function f1(text) {
// //   //alert("Entering test.html file");
// //   alert(text);
// // }
//
// function f1() {
//   //alert("Entering test.html file");
//   aadocument.write(f2());
// }


/*.......................OOP javascript..................*/

// var p = new Object(); //object declaration

//var p = {}; //object declaration

// Adding property
// var p1 ={
//   id: 4,
//   name:'Sunzid',
//   email:'sunzid@hotmail.com',
//   age: 25
// };
// p1.email = 's@u.com';
// //document.write(p1 .email);
//
// // making constructor on your own
//
// function person(id, name) {
//   this.id = id;
//   this.name = name;
// }
//
// var david = new person(101, 'Rupy');
// document.write(david.name);
//
//
// //after calling this function it will return as a object
// function student() {
//   return {
//     name:'ABC',
//     cgpa:3.0
//   };
// }
//
// var s = student();

// var p1 ={
//   id: 4,
//   fname:'Sunzid',
//   lname: 'Mahmudd',
//   fullName: function(){
//     return  this.fname+" "+this.lname;
//   }
// };
//
//  document.write(p1.fullName());
//document.write(p1["fullName"]()); it will also print the full namew

    /*................jQuery.............*/

// $(function () {
//     var txt = $('input').val();
//   //  document.write(txt);// page ar content
//                         //muche diye notun
//                         //kore page start korbe
// })

/*................jQuery Instructions.............*/
/*  1. all JQuery names starts with jQuery,
    or you can write $;
    so jQuery = $;

    2. All jQuery code targets someone.
      after $ write (), in() u will wirte
      the target name.
      $(document)

    3.after $(document) write the event name.
      $(document).ready
      ready = pura page load howar
      pore ready start hobe.

    4.$(document).ready(function () {
          //here u write ur codes.
          when the full page will load, then ur
          code will execute.

    });
 */

//starting jQuery

/* Alternate of document.ready
$(function () {

})
*/

//or
$(document).ready(function () {

  $('button').click(function () {
      //alert('button clicked'); // here button is a tag not input type
      //var msg = document.getElementById('txt').value;
      var msg = $('input').val();

      //$('h2').html(msg); //innerHTML tag ar vitore
      /*   duita same h2 tag ase, separate korlam
          akta div tag ar vitore arekta div tag ar
          baire
      */

      /*div tag ar vitorer ta select korlen*/
      // $('div>h2').html(msg);
      //$('body>h2').html(msg); body tag ar vitore

      //$('input').val('Test'); all clicking the button
      // all input tag value will be test

  /* .........tag with tagType printing selector.....*/
      //$('input[type = text]').val('Test');
      //$('#sampleBtn').val('Test'); // id selector

      $('.myClass').val('button clickMe');// . class selector

      // $('#txt').focus(function () {
      //   alert('focused');
      // });

  });

    // datePicker
    $( "#mydatepicker" ).datepicker({
      changeMonth: true,
      changeYear: true
    });

    /*
      in datepicker function there is a object {}
      in the parameter we use changeYear and changeMonth
    */


});
