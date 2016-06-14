<!doctype html>
<html>
<?php
  ob_start();
  error_reporting(E_ERROR);
  $title = "Hazardous Waste Management & Medical Disposal Toronto & Mississauga";
  $desc = "GIC Medical Disposal is a pharmaceuticals and hazardous waste disposal & waste management company serving Toronto, Mississauga, Niagara Falls & Ottawa.";
  $keywords = "waste management Toronto, hazardous waste disposal Toronto, waste management Mississauga";
?>

<?php include 'components/header.php'; ?>

<div id="slides">
  <div class="slides_container">
    <div class="idx1" onclick="MM_goToURL('parent', 'Services');
    return document.MM_returnValue">
    <div class="mainImageText floatRight">

      <div class="textBox1 floatLeft">
        <h2 class="hero-title">
          <span style="color:#006db7;">SAVING</span> YOU <span style="color:#006db7;">TIME</span> AND <span style="color:#006db7;">MONEY</span>
        </h2>
      </div>

      <div class="textBox2 floatRight">
        <h5>GIC’s expert advice, smart products and great
          service can help you reduce costs and increase
          efficiency.</h5>
        </div>
      </div>

      <a href="Services">
        <div class="btn">
          <h6>CLICK HERE</h6>
          <p>TO LEARN MORE</p>
        </div>
      </a>
    </div>

    <div class="idx2" onclick="MM_goToURL('parent', 'Eco-Friendly');
    return document.MM_returnValue">
    <div class="mainImageText floatRight">
      <div class="textBox1 floatLeft">
        <h2 class="hero-title">
          <span style="color:#006db7;">ECOLOGICALLY</span> SUSTAINABLE
        </h2>
      </div>

      <div class="textBox2 floatRight">
        <h5>GIC Medical Disposal is proud to have the lowest carbon footprint and the highest customer satisfaction in Canada!</h5>
      </div>
    </div>

    <a href="Services">
      <div class="btn">
        <h6>CLICK HERE</h6>
        <p>TO LEARN MORE</p>
      </div>
    </a>
  </div>

  <div class="idx3" onclick="MM_goToURL('parent', 'Start-Service');
  return document.MM_returnValue">
  <div class="mainImageText floatRight">
    <div class="textBox1 floatLeft">
      <h2 class="hero-title"><span style="color:#006db7;">MEDICAL</span> WASTE DISPOSAL <span style="color:#006db7;">SERVICE</span></h2>
    </div>

    <div class="textBox2 floatRight">
      <h5>Industry leading safety and compliance programs are just a part of GIC's premium healthcare waste solutions.</h5>
    </div>
  </div>

  <a href="Start-Service">
    <div class="btn">
      <h6>CLICK HERE</h6>
      <p>TO LEARN MORE</p>
    </div>
  </a>
</div>
</div>

<div class="prev">
  <a class="prev" href="#"></a>
</div>

<div class="next">
  <a class="next" href="#"></a>
</div>
</div>
<br>

<div class="clear"></div>

<div class="contentBoxHome mgnBI">
  <div class="contentLeft">
    <div class="heading">THE GIC ADVANTAGE</div>

    <div class="lineRuleSolid"></div>

    <p>
      <span itemprop="description">
        GIC Medical Disposal is Canada’s premier sharps, pharmaceuticals, hazardous
        waste and medical waste disposal company.
      </span>

      The GIC advantage combines superior customer service and environmentally-
      friendly business conduct with safe and practical solutions that are both
      convenient and cost-effective; GIC Medical Disposal is dedicated to
      helping its customers realize cost-efficiencies, reduce risk, and assist
      in successful operation of any facility. Our compliant, efficient and
      unparalleled customer-focused solutions are designed to meet the specific
      requirements of each customer, while fully eliminating any lingering
      hazmat imprint, or the environmental threat of biomedical waste.
    </p>

    <h1 class="seo-h2-meta-tag">Our Enviromental Services Are:</h1>

    <?php include 'components/buckets.php'; ?>

    <div class="clear"></div>

    <h2 class="seo-h2-meta-tag">Hazardous & Biomedical Waste Management In Compliance With:</h2>

    <div class="lineRuleSolid"></div>

    <div class="compliances">
      <div class="compliance-image">
        <p>
          <a href="http://www.ec.gc.ca/?lang=En" target="_blank">
            <img alt="waste management toronto &amp; mississauga" border="0" src="img/badges2/environment-canada.jpg">
          </a>
        </p>
        <p>Environment Canada</p>
      </div>

      <div class="compliance-image">
        <p>
          <a href="http://www.epa.gov/" target="_blank">
            <img alt="environmental protection agency" border="0" src="img/badges2/epa-logo.gif">
          </a>
        </p>
        <p>US Environment Agency</p>
      </div>

      <div class="compliance-image">
        <p>
          <a href="http://ec.europa.eu/environment/index_en.htm" target="_blank">
            <img alt="basel convention" border="0" src="img/badges2/bc-unep.jpg">
          </a>
        </p>
        <p>European Environment Protection</p>
      </div>

      <div class="compliance-image">
        <p>
          <a href="http://ec.europa.eu/environment/index_en.htm" target="_blank">
            <img alt="Basel Convention" src="img/badges2/basel.gif">
          </a>
        </p>
        <p>European Basel Convention</p>
      </div>
    </div>
  </div>
  <?php include 'components/rightInd.php'; ?>
  <?php include 'components/footer.php'; ?>
