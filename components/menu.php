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
        <li class="menu-list__item">
          <a href="Who-We-Serve">Who We Serve</a></li>
        <li class="menu-list__item">
          <a href="faq">FAQ's</a></li>
        <li class="menu-list__item">
          <a href="Eco-Friendly-Waste-Disposal">ECO Friendly</a></li>
        <li class="menu-list__item">
          <a href="safe-disposal-of-medical-waste">Safety</a></li>
        <li class="menu-list__item">
          <a href="Testimonials">Testimonials</a></li>
        <li class="menu-list__item">
          <a href="Compliance-Training-Program">Compliance Training Program</a></li>
        <li class="menu-list__item noBorder">
          <a href="Careers">Careers</a>
        </li>
      </ul>
    </li>

    <li class="menu-list__item arrow">
      <input class="list__hidden-toggle" type="checkbox" checked>
      <i class="list__chevron"></i>
      <a class="menu-list__item" href="Services">OUR SERVICES</a>
      <ul class="list__hidden-content">
        <li class="menu-list__item">
          <a href="Sharps-Disposal">Sharps Disposal</a></li>
        <li class="menu-list__item">
          <a href="Container-Replacement">Container Replacement Packages</a></li>
        <li class="menu-list__item">
          <a href="Pharmaceuticals-Disposal">Pharmaceuticals Disposal Services</a></li>
        <li class="menu-list__item">
          <a href="Pharmaceutical-Recall">Pharmaceutical Returns or Disposal</a></li>
        <li class="menu-list__item">
          <a href="Chemical-Waste-Disposal">Chemical Disposal Services</a></li>
        <li class="menu-list__item">
          <a href="Biohazard-Waste-Disposal">Biohazard Waste Disposal</a></li>
        <li class="menu-list__item">
          <a href="Chemical-Lab-Packing">Chemical Lab Packing</a></li>
        <li class="menu-list__item noBorder">
          <a href="Sustainability-Services">Sustainability Services</a>
        </li>
      </ul>
    </li>

    <li class="menu-list__item arrow">
      <input class="list__hidden-toggle" type="checkbox" checked>
      <i class="list__chevron"></i>
      <a class="menu-list__item" href="Products">PRODUCTS</a>
      <ul class="list__hidden-content">
        <li class="menu-list__item">
          <a href="Sharps-Containers">Sharps Containers</a></li>
        <li class="menu-list__item">
          <a href="Biomedical-Waste-Containers">Biomedical Waste Containers</a></li>
        <li class="menu-list__item">
          <a href="Other-Waste-Containers">Other Waste Containers</a></li>
        <li class="menu-list__item noBorder">
          <a href="Biomedical-Waste-Bags">Biomedical Waste Bags</a>
        </li>
      </ul>
    </li>

    <li class="menu-list__item">
      <a class="menu-list__item" href="Global">GLOBAL</a>
    </li>

    <li class="menu-list__item arrow">
      <input class="list__hidden-toggle" type="checkbox" checked>
      <i class="list__chevron"></i>
      <a class="menu-list__item" href="Contact-Us">CONTACT US</a>
      <ul class="list__hidden-content">
        <li class="menu-list__item">
          <a href="Start-Service">Start a Service</a></li>
        <li class="menu-list__item">
          <a href="Request-Quote">Request a Quote</a></li>
        <li class="menu-list__item noBorder">
          <a href="Careers">Careers</a>
        </li>
      </ul>
    </li>
  </ul>
</nav>
