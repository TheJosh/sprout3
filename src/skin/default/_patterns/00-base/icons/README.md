Icon System
---

The icon system is inline SVG based using PHP to include the SVG onto the page and wrapper classes for size and colour modifications.

Icons are created in a square 24x24 file regardless of shape so they can be optimised for button and other usage.

*Increase icon size*

The default icon size is 16x16px, an icon class will vertically center the icon. Use with the following classes to increase the size.

* `icon icon--24px`
* `icon icon--32px`
* `icon icon--40px`
* `icon icon--48px`
* `icon icon--52px`
* `icon icon--60px`
* `icon icon--68px`

*Change icon colour*

The default icon colour will be according to the original file, however you may set the SVG's colour.
Use the following classes to change the icon colour.

* `icon--primary`
* `icon--secondary`
* `icon--alternative`
* `icon--white`
* `icon--accent-01`
* `icon--accent-02`

You can also specify an svgs stoke-linecap or stroke-linejoin in the CSS.
Example:
* `stroke-linecap: round / butt / square;`
* `stroke-linejoin: round / bevel / arcs;`
