<?php
//sharePage API Component 
//sharePage API Component 
//sharePage API Component 
//sharePage API Component 
//To use just call nativeShare() component inside the page you whish to share and pass the required paramiters
//To use just call nativeShare() component inside the page you whish to share and pass the required paramiters
//To use just call nativeShare() component inside the page you whish to share and pass the required paramiters
//To use just call nativeShare() component inside the page you whish to share and pass the required paramiters
//EG calling nativeShare('.buttonClassName','Product title or site name','Short description about the page'); inside blog.php file/page
//EG calling nativeShare('.buttonClassName','Product title or site name','Short description about the page'); inside blog.php file/page
//EG calling nativeShare('.buttonClassName','Product title or site name','Short description about the page'); inside blog.php file/page
//EG calling nativeShare('.buttonClassName','Product title or site name','Short description about the page'); inside blog.php file/page
//EG calling nativeShare('.buttonClassName','Product title or site name','Short description about the page'); inside blog.php file/page
function nativeShare($btnClicked="", $shareTitle="", $shareText="")
{
    //getting this page url
    $shareUrl= $_SERVER['REQUEST_URI'];
?>
    <script>
        //native share API
        //native share API
        //native share API
        //native share API
        function nativeShare(btnClicked, shareTitle, shareText, shareUrl) {
            const shareData = {
                title: shareTitle,
                text: shareText,
                url: shareUrl,
            };

            const btn = document.querySelector(btnClicked);

            // Share must be triggered by "user activation"
            btn.addEventListener("click", async () => {
                try {
                    await navigator.share(shareData);
                    resultPara.textContent = "Done! Shared Successfully";
                } catch (err) {
                    resultPara.textContent = `Error: ${err}`;
                }
            });
        }
        nativeShare('<?php echo $btnClicked;?>','<?php echo $shareTitle;?>','<?php echo $shareText;?> ','<?php echo $shareUrl;?>');
        //End of native share API
        //End of native share API
        //End of native share API
        //End of native share API
        //End of native share API
        //End of native share API
    </script>
<?php
}
//sharePage API Component 
//sharePage API Component 
//sharePage API Component 
//sharePage API Component 
//sharePage API Component 
//sharePage API Component 
//sharePage API Component 


