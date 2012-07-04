/**
 * Site Development Tool core methods
 */

var _SDT_STATUS = 0;

function toggle_sdt(val) {
    _SDT_STATUS = val;
    if (val > 0) {
        sdt_setup();
    }
}

function sdt_setup() {
    // Setup SDT
}
