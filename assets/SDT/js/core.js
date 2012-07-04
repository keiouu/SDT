/**
 * Site Development Tool core methods
 */

var _SDT_STATUS = 0;

function toggle_sdt(val) {
    _SDT_STATUS = val;
    if (val > 0) {
        sdt_setup();
    } else {
        sdt_destroy();
    }
}

function sdt_setup() {
    // Setup SDT
    $(".sdt-snippet").addClass("sdt-snippet-active");
}

function sdt_destroy() {
    // Destroy SDT
    $(".sdt-snippet").removeClass("sdt-snippet-active");
}
