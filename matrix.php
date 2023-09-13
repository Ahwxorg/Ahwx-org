<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ahwx >> Matrix</title>
    <link rel="shortcut icon" href="img/avatar.png">
    <meta name="description" content="Ahwx >> Matrix">
    <meta property="og:title" content="Ahwx >> Matrix">
    <meta property="og:site_name" content="ahwx.org">
    <meta property="og:url" content="https://ahwx.org">
    <meta property="og:description" content="Ahwx >> Matrix">
    <meta property="og:type" content="website">
    <meta name="twitter:title" content="Ahwx >> Matrix">
    <meta name="twitter:description" content="Ahwx >> Matrix">
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
        <h1>Matrix</h1>
        <p>Requirements</p>
        <ul>
          <li>Basically any internet connection (Tor works).</li>
          <li>Some common sense.</li>
        </ul>
        <h2>Getting a client (see this as "downloading the app")</h2>
      	<p>I recommend <a href=https://element.io">Element</a>, since it works on mobile platforms and on a real desktop OS.</p>
      	<p>You should look into other clients, however. Matrix is a free and open source protocol. This means that anyone with some coding skills could make their own application for messaging.</p>
      	<h2>Getting a user account</h2>
      	<p>It's not that hard to get a normal @matrix.org account, but the official server is crowded, slow and has some restrictions. Since Matrix is <a href="https://en.wikipedia.org/wiki/Decentralization?lang=en">decentralized</a>, you can use any "homeserver". This is also promoted by Matrix itself. Anyways, if we're friends, I can make an account for you on my @ahwx.org homeserver (I also have some normal user rules and I cannot garantee 100% uptime). Shoot me a message to the email on my <a href="contact.php">contact page</a>. Otherwise, you can just make an account on any homeserver you like, <a href="https://catgirl.cloud">catgirl.cloud</a> as an example.</p>
      	<h2>But I want my own domain as homeserver?</h2>
      	<p>If you run a server, it's not extremely difficult to set up a <a href="https://matrix-org.github.io/synapse/latest/setup/installation.html#installing-as-a-python-module-from-pypi">Matrix Synapse server using Python</a>. Contact me if you need help :).</p>
        <h2>But how and why is this better than WhatsApp, Discord, Telegram, Facebook Messenger, Snapchat, etc, etc</h2>
      	<p>Because of different features, I can't really compare those with Matrix. For example, Snapchat tells you when they *think* someone took a screenshot, Discord has a pretty solid user experience (except for users that don't want to connect over their normal IP, don't want to verify their account with a phone number, etc etc. Read more <a href="https://stallman.org">here</a>.) and more/other apps might also have special features. The main issues I am having with those apps, is that they're all closed source, don't have any form of privacy (except for E2EE for some apps such as WhatsApp and others). This is something you "just have to believe", tho. All those apps say that they're using state of the art militairy level security, but they're usually just using HTTPS as far as we can see (something my website is using, and all websites with a little lock icon in the search bar use).</p>
        <p>Matrix is using encrypted messages, has simple DMs (direct messaging, simple one on one messages), rooms (similar to group chats), spaces (similar to Discord guilds/servers). It also allows media sharing, Jitsi integration for audio/video calls and much more. This is all fine, but where it really gets interesting is when two people communicate. All messages get sent through the homeservers of both of these users. This allows for very safe messaging, since the only server in the middle is someone's homeserver, and not some big data-harvesting company such as Discord, Facebook, etc etc.</p>
        <h2>Why am I making the switch now?</h2>
        <p>Because of two reasons: 1) I think Matrix is working good enough, and Element is user friendly enough for people to actually start using it. 2) I am done with Discord. See my article over at <a href="https://blog.ahwx.org/discord">my blog</a>.</p>

         </br><br>
        </p>
      </div>
      <br>
      <div class="body">
        <p><br>
          Join my Matrix groupchat (#main:ahwx.org)</a>!<br><br>
          If you found something wrong, please send me email (ahwx at ahwx dot org) or a message on <a href="https://matrix.to/#/@ahwx:ahwx.org">Matrix</a> (@ahwx:ahwx.org)
        </p><br>
      </div>
    </main>
	</body>
</html>
