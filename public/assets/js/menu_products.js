//Menu Products - Link Produtos 
function subMenuProducts() {  
    let menuProductsArea = document.getElementById("menuProducts");
    let linkProductsArea = document.getElementById("linkProducts");
    if(menuProductsArea.style.display == 'block') {
        menuProductsArea.style.display = 'none';
    }else {
        menuProductsArea.style.display = 'block';
        linkProductsArea.style.color = '#92a3bd';
        linkProductsArea.style.textDecoration = 'underline';
    }
}
function linkHoverInside() {  
    let linkProductsArea = document.getElementById("linkProducts");     
    linkProductsArea.style.color = '#92a3bd';
    linkProductsArea.style.textDecoration = 'underline'; 
}
function linkHoverOutside() {  
    let linkProductsArea = document.getElementById("linkProducts");
    linkProductsArea.style.textDecoration = 'none';  
}
//Menu Mobile
function subMenuMobile() {  
    let linksMobileArea = document.getElementById("linksMobile");
    let displayArea = document.getElementById("display");
    let closeArea = document.getElementById("close");
    let subLinksProductsArea = document.getElementById("subLinksProducts");
    if(linksMobileArea.style.display == 'block') {
        linksMobileArea.style.display = 'none';
        displayArea.style.display = 'block';
        closeArea.style.display = 'none';
    }else {
        linksMobileArea.style.display = 'block';
        displayArea.style.display = 'none';
        closeArea.style.display = 'block';
        subLinksProductsArea.style.color = '#92a3bd';
        subLinksProductsArea.style.fontWeight = '700';
    }
}
//Menu Mobile Products
function subMenuLinksProducts() {  
    let menuProductsMobileArea = document.getElementById("menuProductsMobile");
    let subLinksProductsArea = document.getElementById("subLinksProducts");
    let linksMobileArea = document.getElementById("linksMobile");
    let displayArea = document.getElementById("display");
    let closeArea = document.getElementById("close");
    if(menuProductsMobileArea.style.display == 'block') {
        menuProductsMobileArea.style.display = 'none';
        subLinksProductsArea.style.color = '#e3e3e3';
        linksMobileArea.style.display = 'none';
        displayArea.style.display = 'block';
        closeArea.style.display = 'none';
    }else {
        menuProductsMobileArea.style.display = 'block';
        subLinksProductsArea.style.color = '#92a3bd';
    }
}