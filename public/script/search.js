function searchProducts() {
    let input, filter, menu, menus, menuname, i, value;

    input = document.getElementById('search-input');
    filter = input.value.toUpperCase();
    menu = document.getElementById('menu_dalam');
    menus = document.getElementById('menu_luar');

    for(i=0; i< menu.length; i++) {
        namamenu = menu[i].getElementById('nama_menu')[0];
        value = namamenu.textcontent || namamenu.innerText;

        if(value.toUpperCase().indexOf(filter) > -1) {
            menu[i].style.display = '';
        }else{
            menu[i].style.display = 'none';
        }

    }
}
