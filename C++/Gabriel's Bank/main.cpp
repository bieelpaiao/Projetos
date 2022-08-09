#include <fstream>
#include "metodos.cxx"
#include <locale.h>
#include <time.h>

using namespace std;

int main() {
	setlocale(LC_ALL, "Portuguese");
	Fluxos teste;
	ContaPoupanca conta;
	
	int sair=0;
	int inicio = teste.inicio();
	
	while (sair == 0) {
		if (inicio == 1) {
			string* dados = teste.criaConta();
			conta.setTitular(dados[0]);
			conta.setCpf(dados[1]);
			conta.setNumero(dados[2]);
			conta.setSaldo(0);
			conta.setFatura(0);
			conta.setLimiteTotal(1500);
			conta.setLimiteDisponivel(conta.getLimiteTotal());
			
			int posCriaConta = teste.posCriaConta();
			if (posCriaConta == 1) {
				int retornar = 0;
				while (retornar == 0) {
					int menuInicial = teste.menuInicial();
					if (menuInicial == 1) {
						double consulta = teste.consultas();
						if(consulta == 1) {
							int consultarSaldo = conta.consultarSaldo();
							if (consultarSaldo == 1) {
								continue;
							} else {
								sair = 3;
								break;
							}
						} else if(consulta == 2) {
							int consultarExtrato = conta.consultarExtrato();
							if (consultarExtrato == 1) {
								continue;
							} else {
								sair = 3;
								break;
							}
						} else {
							continue;
						}
					} else if (menuInicial == 2) {
						double saque = teste.saque();
						int contaSaque = conta.saque(saque);
						if (contaSaque == 1) {
							continue;
						} else {
							sair = 3;
							break;
						}
					} else if (menuInicial == 3) {
						int deposito = teste.deposito();
						if (deposito == 3) {
							continue;
						} else {
							int contaDeposito = conta.deposito(deposito);
							if (contaDeposito == 1) {
								continue;
							} else {
								sair = 3;
								break;
							} 
						} 
					} else if (menuInicial == 4) {
						int transferencia = teste.transferencia();
						if (transferencia == 3) {
							continue;
						} else {
							int contaTransferencia = conta.transferencia();
							if (contaTransferencia == 1) {
								continue;
							} else {
								sair = 3;
								break;
							}
						}
					} else if (menuInicial == 5) {
						double pagamento = teste.pagamento();
						int contaPagamento = conta.pagamento(pagamento);
						if (contaPagamento == 1) {
							continue;
						} else {
							sair = 3;
							break;
						} 
					} else if (menuInicial == 6) {
						int credito = teste.credito();
						if(credito == 1) {
							int compraCredito = conta.compraCredito();
							if (compraCredito == 1) {
								continue;
							} else {
								sair = 3;
								break;
							}
						} else if(credito == 2) {
							int consultarFatura = conta.consultarFatura();
							if (consultarFatura == 1) {
								continue;
							} else {
								sair = 3;
								break;
							}
						} else if(credito == 3) {
							int consultarLimites = conta.consultarLimites();
							if (consultarLimites == 1) {
								continue;
							} else {
								sair = 3;
								break;
							}
						} else if(credito == 4) {
							int pagarFatura = conta.pagarFatura();
							if (pagarFatura == 1) {
								continue;
							} else if (pagarFatura == 2) {
								sair = 3;
								break;
							} else if (pagarFatura == 3) {
								sair = 3;
								break;
							} else {
								sair = 3;
								break;
							}
						} else {
							continue;
						}
					} else if (menuInicial == 7) {
						int poupanca = teste.poupanca();
						if (poupanca == 1) {
							int aplicar = teste.aplicar();
							int contaAplicar = conta.aplicar(aplicar);
								if (contaAplicar == 1) {
									continue;
								} else {
									sair = 3;
									break;
								}
						} else if (poupanca == 2) {
							int resgatar = teste.resgatar();
							int contaResgatar = conta.resgatar(resgatar);
								if (contaResgatar = 1) {
									continue;
								} else {
									sair = 3;
									break;
								}
						} else if (poupanca == 3) {
							int consultarValorInvestido = conta.consultarValorInvestido();
							if (consultarValorInvestido == 1) {
								continue;
							} else {
								sair = 3;
								break;
							}
						} else {
							continue;
						}
					} else {
						retornar = 3;
						sair = 3;
						break;
					} 
				}
			} else if (posCriaConta == 2) {
				sair = 3;
				break;
			}
		} else if (inicio == 3){
			sair = 3;
			break;
		}
	}
	
	remove("extrato.txt");
	remove("fatura.txt");
	cout << "Até mais!" << endl;
}
