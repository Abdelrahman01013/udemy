

// let  userName = localStorage.getItem("username") 

// let  userId =document.querySelector("#user-nav") ;
// let  logOut = document.querySelector("#logOut-nav");
// let  loginBtn = document.querySelector("#login-nav") ;
// let  sinBtn = document.querySelector("#sinUp-nav") ;

 
//           //action in navbar after login 
// if(userName){
//     userId.style.display = "block";
//     logOut.style.display = "block";
//     loginBtn.style.display = "none";
//     sinBtn.style.display = "none";
//     userId.innerHTML = userName
// }
//                 //logout action
//       logOut.addEventListener('click' , function(){
//           localStorage.clear();
//           setTimeout(() =>{
//             //   window.location = '../../sinup.php';
//           } , 1500)
//       })


//  let tabs = Array.from(document.querySelectorAll('button[data-tab]'));
//   tabs.map(tab => {
//                 tabs[0].click();
//     tab.addEventListener('click' , function(){
      
//         let selector = `.featured-cources-${this.dataset.tab} .carousel-item`;
           
//         let courses = document.querySelectorAll(selector);
//         courses.forEach((el) => {
//             const minPerSlide = 4;
//             let next = el.nextElementSibling;
//             for (let i = 1; i < minPerSlide; i++) {
//                 if (!next) {
//                     next = courses[0];
//                 }
//                 let cloneChild = next.cloneNode(true);
//                 el.appendChild(cloneChild.children[0]);
//                 next = next.nextElementSibling;
        
//             }
//         });
//     })
//  })







