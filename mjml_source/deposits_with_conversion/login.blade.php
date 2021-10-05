<?php
/**
 * @var \App\Doctrine\Entity\DepositWithConversion $depositWithConversion
 */
?>
<mjml>
  <mj-include path="../base/head.blade.php" />
  <mj-body background-color="#1E1F27" width="520px">
    <mj-include path="../base/header.blade.php" />

    <mj-wrapper css-class="content-wrap">
      <mj-section css-class="content">
        <mj-group>
          <mj-column vertical-align="middle">
              <mj-text css-class="content-title">
                <span>You have just logged in to your account</span>
              </mj-text>
              <mj-divider border-width="1px" padding="20px 0" border-color="#EEEEEE" />
              <mj-text css-class="content-text">
                IP address: <span style="font-weight: 700">
                192.168.0.0
                </span><br />
                Device: <span style="font-weight: 700">
                Desktop Win 10
                </span><br />
                Date: <span style="font-weight: 700">
                2021-10-12 08:50:00
                </span><br /> <br />
                If you didn't initiate this activity, please contact our support team at <span style="color: #479D7E;">
                support@tokkea.exchange
                </span> or proceed to <span style="color: #479D7E;">tokkea/support</span><br /> <br /> <br />
                Kind regards.<br />
                <span style="color: #479D7E;">Tokkea Team</span><br /><br />
                This is an automated confirmation email. Please do not reply.
              </mj-text>
          </mj-column>
        </mj-group>
      </mj-section>
    </mj-wrapper>

    <mj-include path="../base/footer.blade.php" />
  </mj-body>
</mjml>