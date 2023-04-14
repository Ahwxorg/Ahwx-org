<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <title>Ahwx >> Setup</title>
  </head>
  <body>
    <div class="main-container">
    <div id="topbar">Ahwx >> Setup</div>
      <p>
      <h2>Software</h2>
      <p>
        As my operating system, I mainly use Gentoo GNU/Linux since I like Gentoo being quite easy to understand and I like ebuilds (portage, <a href="https://ahwx.org/pub/make.conf" target="_blank">here</a> is my make.conf) a lot. Bonus is of course the rolling release architecture.<br>
        I use a "custom" kernel, my kernel .config file can be found <a href="https://ahwx.org/pub/kernel.config">here</a>.<br>
        My IDE/text editor is Neovim. No, I will not switch to Emacs.<br>
        For browsing the interwebs, I use either ungoogled chromium, firefox or qutebrowser, and when using qutebrowser, I play video's with yt-dlp and mpv.<br>
        I use i3wm as my window manager.<br>
        I use the ZSH shell with ohmyz.sh.<br>
        For accessing privacy unfriendly services I use either Tor or my own instances/frontends.<br>
      </p>
      <h2>Devices</h2>
      <h3>Laptop</h3><p>
        My laptop is a Lenovo ThinkPad X280 (i5-8350U, 16GB, 1TB NVMe, 1080p touch). I do hate Intel ME, but the prices of old ThinkPads are not low enough to switch to a T60 or something from "that era". I don't "need more" than a T60 (cpu/ram wise) actually, but I do want a laptop which has good battery life, is thin and light and I enjoy a nice (touch!) panel. As said, I run Gentoo GNU/Linux on it, since it just works. The only proprietairy software on my laptop is Linux itself, as it's not fully libre. <a href="https://ahwx.org/x280/kernel">kernel .config file</a>, <a href="https://ahwx.org/x280/portage/make.conf">make.conf</a>.
      </p>
      <h3>PC</h3><p>
        My PC is custom built (Ryzen 5 5600X (4.3GHz base all core), AMD Radeon RX 5700 XT, 16GB 3800MHz CL18, 240GB NVMe SSD, if I need storage, I'll use my server for it). I use it mainly for development work and productivity, sometimes gaming as well and it has Gentoo GNU/Linux on it. <a href="https://ahwx.org/b550/kernel">kernel .config file</a>, <a href="https://ahwx.org/b550/portage/make.conf">make.conf</a>.
      </p>
      <h3>Server</h3><p>
        <del>My storage server is also custom built, please refer to <a href="https://blog.ahwx.org/ahwxinator">this blog post</a> for more information.</del> The CPU for this server has died and I am getting a new one. This server is going to be sold.<br>
        I run two compute servers. Both are HPE ProLiant DL380p G8 servers. One is a SFF variant, one is a LFF variant. I have one (the LFF version; "eclipse") configured with a raw capacity of 40TB storage. My boot drives are on the intergrated P420 raid controller. The data storage is on my Dell H200 flashed to IT mode. I have two Xeon E5-2650's (total of 16 cores, 32 threads at 2.8GHz), 128GB ram and I am planning on adding a GTX 1050 for Jellyfin transcoding. The other (the SFF version; "permafrost") server is built with 96GB ram,two Xeon E5-2630's (total of 12 cores, 24 threads at 2.3GHz) and 500GB of HDD storage as it's plenty for my install. This will probably be upgraded to a RAID1 array with two SSD's, because I use this server for Minecraft hosting specifically. As for software: all of my servers run Gentoo GNU/Linux except for my Proxmox host (HP EliteDesk 400 G2 with an i5-4590S, 12GB ram, 256GB Samsung SSD) which I use for a few Docker containers, including Home Assistant. My webserver/reverse proxy is <a href="https://nginx.org/" target="_blank">NGINX</a>.</p>
      <?php include 'footer.php';?>
    </div>
  </body>
</html>
