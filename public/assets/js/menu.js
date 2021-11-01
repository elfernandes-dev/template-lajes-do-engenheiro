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
