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