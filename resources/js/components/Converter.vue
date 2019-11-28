<template>
    <div>
	<label for="valor">Reais</label>
	<input id="valor" v-model="valor" name="valor" type="text" />

	<br/> <br/>

	<table cellpadding="0" cellspacing="0">
	    <tr>
		<th>Moeda</th>
		<th>Câmbio</th>
		<th>Valor</th>
	    </tr>

	    <tr v-for="(moeda,i) in moedas">
		<td>{{ moeda.name }} ({{ moeda.code}})</td>
		<td>{{ format(parseMoney(moeda.low), 'BRL') }}</td>
		<td v-text="calculo(moeda)"></td>
	    </tr>
	</table>

    </div>
</template>

<script>
 export default {
     props: {
	 inicial: Number,
	 filtro: Array
     },
     
     data: d => ({
	 valor: d.inicial,
	 start: {},
     }),

     computed: {
	 moedas() {
	     if (this.filtro.length) {
		 return Object.values(this.start).filter(
		     m => this.filtro.includes(m.code)
		 );
	     }

	     return this.start;
	 }
     },

     methods: {
	 parseMoney: m => parseFloat(
	     m.replace(/\./g, '')
	      .replace(/,/g, '.')
	 ),

	 calculo({low,code}) {
	     return this.format(
		 parseFloat(this.valor) / this.parseMoney(low),
		 code
	     )
	 },

	 format: (val,code) => val.toLocaleString('pt-BR', {
	     style: 'currency',
	     currency: code
	 })
     },

     created() {
	 axios.get('https://economia.awesomeapi.com.br/all')
	      .then( ({data}) => {
		  this.start = Object.values(data);
		  console.dir(this.start);
	      })
     }
 }
</script>

<style lang-less="">
 table { width: 100%; border-collapse: collapse;}

 td,tr,th {
     border: 1px solid gray;
     padding: 8px;
 }

 input {
     width: calc(100% - 24px); margin: 0;
     font-size: 1.466rem;
     padding: 12px;
 }

 th { background: #4a148c; color: white; border-color: #4a148c; }

 tr:nth-child(even) { background: #ececec }
</style>
