<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Example 1</title>
<style>
.clearfix:after {
  content: "";
  display: table;
  clear: both;
}

a {
  color: #5D6975;
  text-decoration: underline;
}

body {
  position: relative;
  width: 100%;  
  height: 29.7cm; 
  margin: 0 auto; 
  margin-top: 50px;
  color: #001028;
  background: #FFFFFF; 
  font-family: Arial, sans-serif; 
  font-size: 12px; 
  font-family: Arial;
}

header {
  padding: 10px 0;
  margin-bottom: 30px;
}

#logo {
  text-align: center;
  margin-bottom: 10px;
}

#logo img {
  width: 90px;
}

h1 {
    background-color: #F5F5F5;
  border-top: 1px solid  #5D6975;
  border-bottom: 1px solid  #5D6975;
  color: #5D6975;
  font-size: 2.4em;
  line-height: 1.4em;
  font-weight: normal;
  text-align: center;
  margin: 0px 0 20px 0;
}

#project {
  margin-top: 70px;
  float: left;
}

#project span {
  color: #5D6975;
  text-align: right;
  width: 52px;
  margin-right: 10px;
  display: inline-block;
  font-size: 0.8em;
}

#company {
  float: right;
  text-align: right;
}

#project div,
#company div {
  white-space: nowrap;        
}

table {
  width: 100%;
  border-collapse: collapse;
  border-spacing: 0;
  margin-bottom: 20px;
}

table tr:nth-child(2n-1) td {
  background: #F5F5F5;
}

table th,
table td {
  text-align: center;
}

table th {
  padding: 5px 20px;
  color: #5D6975;
  border-bottom: 1px solid #C1CED9;
  white-space: nowrap;        
  font-weight: normal;

}

table .service,
table .desc {
  text-align: left;
}

table td {
  padding: 20px;
  text-align: center;
}
table td.r {
  text-align: right;
}

table td.service,
table td.desc {
  vertical-align: top;
}

table td.unit,
table td.qty,
table td.total {
  font-size: 1.2em;
}

table td.grand {
  border-top: 1px solid #5D6975;;
}

#notices .notice {
  color: #5D6975;
  font-size: 1.2em;
}

footer {
  color: #5D6975;
  background-color: #F5F5F5;
  width: 100%;
  height: 30px;
  position: absolute;
  bottom: 0;
  border-top: 1px solid #C1CED9;
  padding: 8px 0;
  text-align: center;
}
    </style>
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
      </div>
      <h1>Facture N°{{ $invoice->id }}</h1>
      <div id="project">
        <div><span>CLIENT</span> {{ $client->name }}</div>
        @if ($client->address !== null)<div><span>ADRESSE</span> {{ $client->address }}</div>@endif
        @if ($client->phone !== null)<div><span>N° TÉL</span> {{ $client->phone }}</div>@endif
        @if ($client->email !== null)<div><span>E-MAIL</span> <a href="mailto:{{ $client->email }}">{{ $client->email }}</a></div>@endif
        <div><span>DATE</span> {{ $invoice->created_at }}</div>
      </div>
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th class="service">PRODUIT</th>
            <th>PRIX</th>
            <th>QTE</th>
            <th>TOTAL</th>
          </tr>
        </thead>
        <tbody>
        @php($total=0)
        @foreach($products_sale as $product)
          <tr>
            <td class="service">{{ $product->products->designation }}</td>
            <td class="unit">{{ number_format($product->selling_price,2) }} DH</td>
            <td class="qty">{{ $product->qte }}</td>
            <td class="total">@php($total += $product->selling_price*$product->qte){{ number_format($product->selling_price*$product->qte,2) }} DH</td>
          </tr>
          @endforeach
          <tr>
            <td colspan="3" class="r">PRIX HT</td>
            <td class="total">{{number_format($total,2)}} DH</td>
          </tr>
          <tr>
            <td colspan="3" class="r">TVA 20%</td>
            <td class="total">{{number_format($total*0.2,2)}} DH</td>
          </tr>
          <tr>
            <td colspan="3" class="r grand total">PRIX TOTAL</td>
            <td class="grand total">{{number_format($total + $total*0.2,2)}} DH</td>
          </tr>
        </tbody>
      </table>
    </main>
    <footer>
      Nom de Société - SARL, R.C : XX XXXX, Adresse : Avenue Annakhil Hay Riyad - Rabat, <br>Taxe Professionnelle : XXXXXXX, IF : XXX XXX, ICE : XXXXXXXX 
    </footer>
  </body>
</html>