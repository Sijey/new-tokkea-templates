<mjml>
  <mj-include path="../base/head.blade.php" />
  <mj-body background-color="#1E1F27" width="525px">
    <mj-include path="../base/header.blade.php" />

    <mj-wrapper css-class="content-wrap">
      <mj-section css-class="content">
        <mj-group>
          <mj-column vertical-align="middle">
            <mj-text css-class="content-title">
              <img style="vertical-align: middle; padding: 0 5px 4px 0" src="{{ asset($rootPath . '/emails/images/deposits_with_conversion/triangle-warning.png') }}" alt="" width="20px" height="20px" />
              <span>Оплата не проведена</span>
            </mj-text>
            <mj-divider border-width="1px" padding="20px 0" border-color="#EEEEEE" />
            <mj-text css-class="content-text" color="#6D6D6D">
              Здравствуйте! <br /> <br />
              Ваша транзакция: CPFH0QTMZV5HOBU4FTQLHM6UDH <br />
              На адрес: <span style="font-weight: 700">3DXri7mse3kSr5HnbZU35LeqfBG7fjhmG</span><br />
              В сумме <span style="font-weight: 700; color: #479D7E;">5694.000000TRX</span> не проведена. <br /> <br />
              Обратитесь в службу поддержки <a href="mailto:support@tokkea.finance" style="color: #479D7E;">support@tokkea.finance</a> для более подробной информации.С
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