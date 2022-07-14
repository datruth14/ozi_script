/*service worker script*/
/*service worker script*/
/*service worker script*/
if ("serviceWorker" in navigator) {
  navigator.serviceWorker.register("sw.js").then(function () {
    console.log("Service Worker Registered");
  });
}
/*service worker script*/
/*service worker script*/
/*service worker script*/



/*Sweet Alert2  basic alert with h1, p, and icon animated (visit sweetalert2.https://sweetalert2.github.io/) for more customized alert template*/
/*Sweet Alert2  basic alert with h1, p, and icon animated (visit sweetalert2.https://sweetalert2.github.io/) for more customized alert template*/
/*Sweet Alert2  basic alert with h1, p, and icon animated (visit sweetalert2.https://sweetalert2.github.io/) for more customized alert template*/

function responsealert(h1, des, msgicon) {
  Swal.fire(h1, des, msgicon);
}


/*Sweet Alert2 basic alert with h1, p, and icon animated (visit sweetalert2.https://sweetalert2.github.io/) for more customized alert  template*/
/*Sweet Alert2  basic alert with h1, p, and icon animated (visit sweetalert2.https://sweetalert2.github.io/) for more customized alert template*/
/*Sweet Alert2  basic alert with h1, p, and icon animated (visit sweetalert2.https://sweetalert2.github.io/) for more customized alert template*/

/*start your custom js request here*/
/*start your custom js request here*/
/*start your custom js request here*/
/*start your custom js request here*/




/**Dynamic Roucting for SPA */
/**Dynamic Roucting for SPA */
/**Dynamic Roucting for SPA */
function appPage(mainlink, appParamsOne,appParamsTwo) {
  $("#main").load(mainlink, {
    screens: appParamsOne,
    pid:appParamsTwo
  });
  //hide default screen when a link is clicked
  document.getElementById("root").style.display = "none";
}
/**Dynamic Roucting for SPA */
/**Dynamic Roucting for SPA */
/**Dynamic Roucting for SPA */