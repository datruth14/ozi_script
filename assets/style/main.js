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

/*intialize the loader*/
var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
/*End Initiazeing the loader*/

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

//SideBar Nav script
//SideBar Nav script
//SideBar Nav script
window.addEventListener("DOMContentLoaded", (event) => {
  // Toggle the side navigation
  const sidebarToggle = document.body.querySelector("#sidebarToggle");
  if (sidebarToggle) {
    // Uncomment Below to persist sidebar toggle between refreshes
    // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
    //     document.body.classList.toggle('sb-sidenav-toggled');
    // }
    sidebarToggle.addEventListener("click", (event) => {
      event.preventDefault();
      document.body.classList.toggle("sb-sidenav-toggled");
      localStorage.setItem(
        "sb|sidebar-toggle",
        document.body.classList.contains("sb-sidenav-toggled")
      );
    });
  }
});
//SideBar Nav script
//SideBar Nav script
//SideBar Nav script
