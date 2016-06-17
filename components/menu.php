<?
  if ($menuVersion == 'condensed') {
    $menuSize = 'condensed';
  } else {
    $menuSize = 'expanded';
  }
?>

<nav>
  <ul class="<?= $menuSize ?> list">
    <li class="menu-list__item arrow">
      <input class="list__hidden-toggle" type="checkbox" checked>
      <i class="list__chevron"></i>
      <a class="menu-list__item" href="About-Us">ABOUT US</a>
      <ul class="list__hidden-content">
        <li><a class="menu-list__item" href="Who-We-Serve">Who We Serve</a></li>
        <li><a class="menu-list__item" href="faq">FAQ's</a></li>
        <li><a class="menu-list__item" href="Eco-Friendly-Waste-Disposal">ECO Friendly</a></li>
        <li><a class="menu-list__item" href="safe-disposal-of-medical-waste">Safety</a></li>
        <li><a class="menu-list__item" href="Testimonials">Testimonials</a></li>
        <li><a class="menu-list__item" href="Compliance-Training-Program">Compliance Training Program</a></li>
        <li class="noBorder"><a class="menu-list__item" href="Careers">Careers</a></li>
      </ul>
    </li>

    <li class="menu-list__item arrow">
      <input class="list__hidden-toggle" type="checkbox" checked>
      <i class="list__chevron"></i>
      <a class="menu-list__item" href="Services">OUR SERVICES</a>
      <ul class="list__hidden-content">
        <li><a class="menu-list__item" href="Sharps-Disposal">Sharps Disposal</a></li>
        <li><a class="menu-list__item" href="Container-Replacement">Container Replacement Packages</a></li>
        <li><a class="menu-list__item" href="Pharmaceuticals-Disposal">Pharmaceuticals Disposal Services</a></li>
        <li><a class="menu-list__item" href="Pharmaceutical-Recall">Pharmaceutical Returns or Disposal</a></li>
        <li><a class="menu-list__item" href="Chemical-Waste-Disposal">Chemical Disposal Services</a></li>
        <li><a class="menu-list__item" href="Biohazard-Waste-Disposal">Biohazard Waste Disposal</a></li>
        <li><a class="menu-list__item" href="Chemical-Lab-Packing">Chemical Lab Packing</a></li>
        <li class="noBorder"><a class="menu-list__item" href="Sustainability-Services">Sustainability Services</a></li>
      </ul>
    </li>

    <li class="menu-list__item arrow">
      <input class="list__hidden-toggle" type="checkbox" checked>
      <i class="list__chevron"></i>
      <a class="menu-list__item" href="Products">PRODUCTS</a>
      <ul class="list__hidden-content">
        <li><a class="menu-list__item" href="Sharps-Containers">Sharps Containers</a></li>
        <li><a class="menu-list__item" href="Biomedical-Waste-Containers">Biomedical Waste Containers</a></li>
        <li><a class="menu-list__item" href="Other-Waste-Containers">Other Waste Containers</a></li>
        <li class="noBorder"><a class="menu-list__item" href="Biomedical-Waste-Bags">Biomedical Waste Bags</a></li>
      </ul>
    </li>

    <li>
      <a class="menu-list__item" href="Global">GLOBAL</a>
    </li>

    <li class="menu-list__item arrow">
      <input class="list__hidden-toggle" type="checkbox" checked>
      <i class="list__chevron"></i>
      <a class="menu-list__item" href="Contact-Us">CONTACT US</a>
      <ul class="list__hidden-content">
        <li><a class="menu-list__item" href="Start-Service">Start a Service</a></li>
        <li><a class="menu-list__item" href="Request-Quote">Request a Quote</a></li>
        <li class="noBorder"><a class="menu-list__item" href="Careers">Careers</a></li>
      </ul>
    </li>
  </ul>
</nav>
