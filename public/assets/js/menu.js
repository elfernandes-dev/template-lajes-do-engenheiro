//Menu Products
function subMenuProducts() {  
    let menuProductsArea = document.getElementById("menuProducts");
    let linkProductsArea = document.getElementById("linkProducts");
    if(menuProductsArea.style.display == 'block') {
        menuProductsArea.style.display = 'none';
        linkProductsArea.style.color = '#e3e3e3';
        linkProductsArea.style.textDecoration = 'none';
        linkProductsArea.style.borderBottom = "none";
    }else {
        menuProductsArea.style.display = 'block';
        linkProductsArea.style.color = '#92a3bd';
        linkProductsArea.style.textDecoration = 'underline';
        linkProductsArea.style.borderBottom = "1px double rgba(204, 204, 204, 0.95)";
    }
}
function linkHoverInside() {  
    let linkProductsArea = document.getElementById("linkProducts");     
    linkProductsArea.style.color = '#92a3bd';
    linkProductsArea.style.textDecoration = 'underline'; 
}
function linkHoverOutside() {  
        let linkProductsArea = document.getElementById("linkProducts");     
        linkProductsArea.style.color = '#e3e3e3';
        linkProductsArea.style.textDecoration = 'none';
}
//Menu Mobile
function subMenuMobile() {  
    let linksMobileArea = document.getElementById("linksMobile");
    let displayArea = document.getElementById("display");
    let closeArea = document.getElementById("close");
    if(linksMobileArea.style.display == 'block') {
        linksMobileArea.style.display = 'none';
        displayArea.style.display = 'block';
        closeArea.style.display = 'none';
    }else {
        linksMobileArea.style.display = 'block';
        displayArea.style.display = 'none';
        closeArea.style.display = 'block';
    }
}
//Menu Mobile Products
function subMenuLinksProducts() {  
    let menuProductsMobileArea = document.getElementById("menuProductsMobile");
    let subLinksProductsArea = document.getElementById("subLinksProducts");
    if(menuProductsMobileArea.style.display == 'block') {
        menuProductsMobileArea.style.display = 'none';
        subLinksProductsArea.style.color = '#e3e3e3';
    }else {
        menuProductsMobileArea.style.display = 'block';
        subLinksProductsArea.style.color = '#92a3bd';
    }
}
