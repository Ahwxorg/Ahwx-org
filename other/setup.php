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
          As my operating system, I mainly use Gentoo GNU/Linux since I like Gentoo being quite easy to understand and I like portage a lot. Bonus is of course the rolling release architecture.<br>
          I use a "custom" kernel.<br>
          My IDE/text editor is Neovim. No, I will not switch to Emacs.<br>
          For browsing the interwebs, I use either ungoogled chromium, firefox or qutebrowser, and when using qutebrowser, I play video's with yt-dlp and mpv.<br>
          I use i3wm as my window manager.<br>
          I use the ZSH shell with ohmyz.sh.<br>
          For accessing privacy unfriendly services I use either Tor or my own instances/frontends.<br>
      <br></p>
      <h2>Devices</h2>
      <h3>Laptop</h3><p><br>
        My laptop is a Lenovo ThinkPad X280 (i5-8350U, 16GB, 1TB NVMe, 1080p touch). I do hate Intel ME, but the prices of old ThinkPads are not low enough to switch to a T60 or something from "that era". I don't "need more" than a T60 (cpu/ram wise) actually, but I do want a laptop which has good battery life, is thin and light and I enjoy a nice (touch!) panel. As said, I run Gentoo GNU/Linux on it, since it just works. The only proprietairy Setup on my laptop is Linux itself, as it's not fully libre. <a href="https://ahwx.org/x280/kernel">kernel .config file</a>, <a href="https://ahwx.org/x280/portage/make.conf">make.conf</a>.
      </p>
      <h3>PC</h3><p><br>
        My PC is custom built (Ryzen 5 5600X (4.3GHz base all core), AMD Radeon RX 5700 XT, 16GB 3800MHz CL18, 240GB NVMe SSD, if I need storage, I'll use my server for it). I use it mainly for development work and productivity, sometimes gaming as well and it has Gentoo GNU/Linux on it. <a href="https://ahwx.org/b550/kernel">kernel .config file</a>, <a href="https://ahwx.org/b550/portage/make.conf">make.conf</a>.
      </p>
      <h3>Server</h3><p><br>
        <del>My storage server is also custom built, please refer to <a href="https://blog.ahwx.org/ahwxinator">this blog post</a> for more information.</del> The CPU for this server has died and I am getting a new one. This server is going to be sold.<br>
        I run two compute servers. Both are HPE ProLiant DL380p G8 servers. One is a SFF variant, one is a LFF variant. I have one (the LFF version; "eclipse") configured with a raw capacity of 40TB storage. My boot drives are on the intergrated P420 raid controller. The data storage is on my Dell H200 flashed to IT mode. I have two Xeon E5-2650's (total of 16 cores, 32 threads at 2.8GHz), 128GB ram and I am planning on adding a GTX 1050 for Jellyfin transcoding. The other (the SFF version; "permafrost") server is built with 96GB ram,two Xeon E5-2630's (total of 12 cores, 24 threads at 2.3GHz) and 500GB of HDD storage as it's plenty for my install. This will probably be upgraded to a RAID1 array with two SSD's, because I use this server for Minecraft hosting specifically. As for Setup: all of my servers run Gentoo GNU/Linux except for my Proxmox host (HP EliteDesk 400 G2 with an i5-4590S, 12GB ram, 256GB Samsung SSD) which I use for a few Docker containers, including Home Assistant. My webserver/reverse proxy is <a href="https://nginx.org/" target="_blank">NGINX</a>.</p>
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
