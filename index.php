<!DOCTYPE html>
<html>
  <head>
    <link type='text/css' rel='stylesheet' href='style.css'/>
  <title>PHP!</title>
  <script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
  <link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
  </head>
  <body>
  <table width="100%" border="5" align="center" cellpadding="0" cellspacing="5">
    <tr align="center">
      <td><ul id="Banda" class="MenuBarHorizontal">
      <li><a class="MenuBarItemSubmenu" href="#">Banda</a>
            <ul>
              <li><a href="#">Mick Jagger</a></li>
              <li><a href="#">Guitarrista</a></li>
              <li><a href="#">Elemento 1.3</a></li>
          </ul>
        </li>
</ul></td>
      <td>Noticias</td>
      <td>Programación</td>
      <td>Discografía</td>
    </tr>
  </table>
  <script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("Banda", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
  </script>
</body>
</html>