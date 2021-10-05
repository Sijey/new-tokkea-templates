<?php
  /**
   * @var \App\Doctrine\Entity\DepositWithConversion $depositWithConversion
   */
?>
<mjml>
  <mj-include path="../base/head.blade.php" />
  <mj-body background-color="#1E1F27" width="525px">
    <mj-include path="../base/header.blade.php" />

    <mj-wrapper css-class="content-wrap">
      <mj-section css-class="content">
        <mj-group>
          <mj-column vertical-align="middle">
            <mj-text css-class="content-title">
              <img style="vertical-align: middle; padding: 0 5px 4px 0" src="{{ asset($rootPath . '/emails/images/deposits_with_conversion/success.png') }}" alt="success" width="20px" height="20px" />
              <span>Успешная оплата</span>
            </mj-text>
            <mj-divider border-width="1px" padding="20px 0" border-color="#EEEEEE" />
            <mj-text css-class="content-text" color="#6D6D6D">

              Здравствуйте! <br /> <br />
              Ваша оплата транзакции: {{ $depositWithConversion->getSupportTicketId() }} <br />
              На адрес: <span style="font-weight: 700">{{ $depositWithConversion->getUserDepositAddress()->getAddress() }}</span><br />
              В сумме <span style="font-weight: 700; color: #479D7E;">@decimal_beautify($depositWithConversion->getRealAmountIn()) {{ $depositWithConversion->getCurrencyIn()->getTicker() }}</span> проведена успешно. <br /> <br />
              Переплата составляет <span style="font-weight: 700; color: #479D7E;">@decimal_beautify(bcsub($depositWithConversion->getRealAmountIn(), $depositWithConversion->getExpectedAmountIn())) {{ $depositWithConversion->getCurrencyIn()->getTicker() }}.</span>
              Для возврата обратитесь в службу поддержки <a href="mailto:support@tokkea.finance" style="color: #479D7E;">support@tokkea.finance</a> для более подробной информации.С
              <br /><br />
              С Уважением,<br />
              Команда Tokkea!
            </mj-text>
          </mj-column>
        </mj-group>
      </mj-section>
    </mj-wrapper>
    
    <mj-include path="../base/footer.blade.php" />
  </mj-body>
</mjml>