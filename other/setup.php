<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ahwx >> Setup</title>
    <link rel="shortcut icon" href="img/avatar.png">
    <meta name="description" content="Ahwx >> Setup">
    <meta property="og:title" content="Ahwx >> Setup">
    <meta property="og:site_name" content="ahwx.org">
    <meta property="og:url" content="https://ahwx.org">
    <meta property="og:description" content="Ahwx >> Setup">
    <meta property="og:type" content="website">
    <meta name="twitter:title" content="Ahwx >> Setup">
    <meta name="twitter:description" content="Ahwx >> Setup">
    <meta name="keywords" content="ahwx, linux, gnu, gentoo, void, arch, foss, floss, oss, html, css, blog, computing, computers, nas, personal website, open source, tutorials, tutorial, libre, git, arch linux, archlinux, openbsd, freebsd, bsd, macos, macbook, thinkpad, lenovo thinkpad, lenovo, ibm, ibm thinkpad, networking">
    <link href="../img/avatar.png" type="image/png" rel="icon">
    <link href="../css/style.css" type="text/css" rel="stylesheet">
    <link rel="canonical" href="https://ahwx.org"/>
  </head>
	<body>
		<div class="navbar-holder">
			<header class="navbar">
				<div class="avatar"><img class="mono-image" src="/img/avatar.png" alt="avatar"/></div>
				<h1><a class="headertext" href="/">ahwx</a></h1>
				<nav class="topnav">
					<ul>
						<li><a href="https://blog.ahwx.org">blog</a></li>
						<li><a href="https://git.ahwx.org">git</a></li>
						<li><a href="/contact.php">contact</a></li>
						<li><a href="/webrings.php">webrings</a></li>
						<li><a href="/instances.php">instances</a></li>
						<li><a href="/other/">other</a></li>
            <br>
					</ul>
				</nav>
			</header>
		</div>
    <main>
      <div class="body">
        <br>
        <h2>Setup</h2>
        <p><br>
          As my operating system, I mainly use Gentoo GNU/Linux when I can*, since I like Gentoo being quite easy to understand and I like Portage a lot. Bonus is of course the rolling release architecture. * = my main computer, a MacBook Pro 14" 2023 M2 Pro is not able to run Gentoo, and thus I run MacOS with Yabai, Sketchybar and skhd.<br>
          On Gentoo, I use a "custom" kernel.<br>
          My IDE/text editor is Neovim. No, I will not switch to Emacs.<br>
          For browsing the interwebs, I use either ungoogled chromium, firefox or qutebrowser.<br>
          I use dwm (and Yabai on the MacBook) as my window manager.<br>
          I use the Fish shell with Fisher installed.<br>
          For accessing privacy unfriendly services I use either Tor or my own instances/frontends.<br>
      <br></p>
      <h2>Devices</h2>
      <h3>Laptop</h3><p><br>
        My laptop is a Apple MacBook Pro 14" 2023 (M2 Pro, 16GB, 512GB NVMe). I wanted the MacBook because I wanted a laptop which has good battery life, is thin and light and has amazing performance. I enjoy a nice (touch) panel, but the display quality more than makes up for lacking touch compatibility. As said, I run MacOS on it, I'd rather use Gentoo, but the machine works more than fine with Yabai, Sketchybar and skhd.
      </p>
      <h3>PC</h3><p><br>
        My PC is custom built (Ryzen 5 5600X (4.3GHz base all core), AMD Radeon RX 5700 XT, 16GB 3800MHz CL18, 240GB NVMe SSD, if I need storage, I'll use my server for it). I use it mainly for gaming when I need to, sometimes video work as well and thus I am forced to use Windows.
      </p>
      <h3>Server</h3><p><br>
        I run two compute servers. Both are HPE ProLiant DL380p G8 servers. One is a SFF variant, one is a LFF variant. I have the LFF one configured with a raw capacity of 2TB storage. My boot drives are on the intergrated P420 raid controller. I have two Xeon E5-2650's (total of 16 cores, 32 threads at 2.8GHz), 128GB ram. The data storage is on my other server; frontier. Frontier is a server that's hacked together and runs a Xeon E5-2650 v4, 128GB ECC Reg DDR4 and a GTX 1050 for Jellyfin purposes. Frontier runs NixOS. The SFF server is configured with 128GB of ram, two Xeon E5-2630L v2's (total of 12 cores, 24 threads at 2.4GHz) and 2x 146GB of SAS 15k RPM HDD drives in a mirror as it's plenty for my Proxmox install. This will probably be upgraded to a RAID1 array with two SSD's, because I use this server for VMs specifically. I also have a few other servers, such as my Acer X3990 that I put into a rack case, my Dell PowerEdge R220 and a WIP. Those servers are currently not really used, and there is no use mentioning them any further. As for the OS'es of the servers/VMs that I do use: all of my servers run Proxmox GNU/Linux unless mentioned otherwise and except for my VMs, which mostly run Debian.</p>
        <br>
      </div>
      <br>
      <div class="body">
        <p><br>
          Join my Matrix groupchat (#main:ahwx.org)</a>!<br><br>
          If you found something wrong, please send me an <a href="mailto:ahwx@ahwx.org">email</a> or a message on <a href="https://matrix.to/#/@ahwx:ahwx.org">Matrix</a> (@ahwx:ahwx.org)
        </p><br>
      </div>
    </main>
	</body>
</html>
