#include "classes.h"
#include <fstream>
#include <time.h>
#include <vector>

using namespace std;

int Fluxos :: inicio() {
	int opcao=2;
	cout << "---------------------- BEM VINDO AO GABRIEL'S BANK ----------------------" << endl << endl;
	while (opcao == 2) {
		cout << "Escolha uma opção: " << endl;
		cout << "1 - Criar conta" << endl;
		cout << "2 - Entrar na minha conta" << endl;
		cout << "3 - Sair" << endl;
		cin >> opcao;
		
		if(opcao == 2) {
			cout << "Recurso indisponível no momento. Tente novamente mais tarde." << endl;
		}
	}
	
	switch(opcao) {
		case 1:
		case 3:
			return(opcao);
			break;
		default:
			cout<< "Opção Inválida!" << endl;
			inicio();
	}
	
}

string* Fluxos :: criaConta() {
	string titular;
	string cpf="";
	string numero="";
	static string dados[3];
	
	cout << "\n\nAgradecemos por escolher Gabriel's Bank. Você está a um passo de conquistar sua conta digital: ";
	cout << "\n\nPrimeiro, informe seu nome: ";
	cin >> titular;
	while(cpf.length() != 11) {
		cout << "Agora, informe seu CPF (Somente números): ";
		cin >> cpf;
		
		if (cpf.length() != 11) {
			cout << "CPF Inválido! Tente novamente." << endl;
		}
	}
	
	while(numero.length() != 5) {
		cout << "Por fim, escolha o número da sua conta (5 dígitos): ";
		cin >> numero;
		
		if (numero.length() != 5) {
			cout << "Número inválido! Tente novamente." << endl;
		}
	}

	cout << "\n\nPronto, a sua conta foi criada! Viu como é rápido?" << endl;
	
	dados[0] = titular;
	dados[1] = cpf;
	dados[2] = numero;
	
	return dados;
}

int Fluxos :: posCriaConta() {
	int opcao = 0;
	while (opcao != 1 && opcao != 2) {
		cout << "\nAgora, escolha o que deseja fazer: " << endl;
		cout << "1 - Começar a usar a conta" << endl;
		cout << "2 - Fechar o app e voltar depois" << endl;
		cin >> opcao;
		
		if (opcao != 1 && opcao != 2) {
			cout << "Opção Inválida!" << endl;
		}
	}
	
	switch(opcao) {
		case 1:
		case 2:
			return (opcao);
			break;
	}
}

int Fluxos :: menuInicial() {
	int opcao = 0;
	cout << "\n\n---------------------- MENU INICIAL ----------------------" << endl << endl;
	while (opcao != 1 && opcao != 2 && opcao != 3 && opcao != 4 && opcao != 5 && opcao != 6 && opcao != 7 && opcao != 9) {
		cout << "Escolha um serviço: " << endl;
		cout << "1 - Consulta" << endl;
		cout << "2 - Saque" << endl;
		cout << "3 - Depósito" << endl;
		cout << "4 - Transferência" << endl;
		cout << "5 - Pagamento" << endl;
		cout << "6 - Crédito" << endl;
		cout << "7 - Poupança" << endl;
		cout << "9 - Sair" << endl;
		cin >> opcao;
		
		if (opcao != 1 && opcao != 2 && opcao != 3 && opcao != 4 && opcao != 5 && opcao != 6 && opcao != 7 && opcao != 9)	{
			cout << "Opção Inválida!" << endl;
		}
	}
	
	switch (opcao) {
		case 1:
		case 2:
		case 3:
		case 4:
		case 5:
		case 6:
		case 7:
			return(opcao);
	}	
}

int Fluxos :: consultas() {
	int opcao = 0;
	cout << "\n\n---------------------- CONSULTAS ----------------------" << endl << endl;
		while (opcao != 1 && opcao != 2 && opcao != 3) {
		cout << "O que você deseja consultar? " << endl;
		cout << "1 - Saldo" << endl;
		cout << "2 - Extrato" << endl;
		cout << "3 - Retornar ao menu inicial" << endl;
		cin >> opcao;
		
		if (opcao != 1 && opcao != 2 && opcao != 3) {
			cout << "Opção Inválida!" << endl;
		}		
	}
	
	return (opcao);
}

double Fluxos :: saque() {
	double valor;
	cout << "\n\n---------------------- SAQUE ----------------------" << endl << endl;
	cout << "Informe o valor desejado: " << endl;
	cin >> valor;
	
	return (valor);
}

int Fluxos :: deposito() {
	double valor;
	int opcao=0;
	cout << "\n\n---------------------- DEPÓSITO ----------------------" << endl << endl;
	while (opcao != 1 && opcao != 2 && opcao != 3) {
		cout << "Qual o tipo de depósito? " << endl;
		cout << "1 - Dinheiro" << endl;
		cout << "2 - Cheque" << endl;
		cout << "3 - Retornar ao menu inicial" << endl;
		cin >> opcao;
		
		if (opcao != 1 && opcao != 2 && opcao != 3) {
			cout << "Opção Inválida!" << endl;
		}		
	}
	
	return (opcao);
}

double Fluxos :: pagamento() {
	double valor;
	cout << "\n\n---------------------- PAGAMENTO DE BOLETO ----------------------" << endl << endl;
	cout << "Informe o valor do boleto: " << endl;
	cin >> valor;
	
	return (valor);
}

int Fluxos :: transferencia() {
	int opcao = 0;
	cout << "\n\n---------------------- TRANSFERÊNCIA BANCÁRIA ----------------------" << endl << endl;
	while (opcao != 1 && opcao != 2 && opcao != 3) {
		cout << "Qual o banco do recebedor? " << endl;
		cout << "1 - GABRIEL'S BANK" << endl;
		cout << "2 - Outro" << endl;
		cout << "3 - Retornar ao menu inicial" << endl;
		cin >> opcao;
		
		if (opcao != 1 && opcao != 2 && opcao != 3) {
			cout << "Opção Inválida!" << endl;
		}
	}
	
	return (opcao);
}

int Fluxos :: credito() {
	int opcao=0;
	cout << "\n\n---------------------- CRÉDITO ----------------------" << endl << endl;
	while (opcao != 1 && opcao != 2 && opcao != 3 && opcao != 4 && opcao != 5) {
		cout << "Informe a opção desejada: " << endl;
		cout << "1 - Compra" << endl;
		cout << "2 - Ver Fatura" << endl;
		cout << "3 - Ver Limites" << endl;
		cout << "4 - Pagar Fatura" << endl;
		cout << "5 - Retornar ao Menu Inicial" << endl;
		cin >> opcao;
		
		if (opcao != 1 && opcao != 2 && opcao != 3 && opcao != 4 && opcao != 5) {
			cout << "Opção Inválida!" << endl;
		}		
	}
	
	return (opcao);
}

int Fluxos :: poupanca() {
	int opcao=0;
	cout << "\n\n---------------------- POUPANÇA ----------------------" << endl << endl;
	while (opcao != 1 && opcao != 2 && opcao != 3 && opcao != 4) {
		cout << "Informe a opção desejada: " << endl;
		cout << "1 - Aplicar" << endl;
		cout << "2 - Resgatar" << endl;
		cout << "3 - Ver Valor Investido" << endl;
		cout << "4 - Retornar ao Menu Inicial" << endl;
		cin >> opcao;
		
		if (opcao != 1 && opcao != 2 && opcao != 3 && opcao != 4) {
			cout << "Opção Inválida!" << endl;
		}		
	}
	
	return (opcao);
}

int Fluxos :: aplicar() {
	double valor;
	cout << "\n\n---------------------- APLICAR NA POUPANÇA ----------------------" << endl << endl;
	cout << "Informe o valor desejado: " << endl;
	cin >> valor;
	
	return (valor);
}

int Fluxos :: resgatar() {
	double valor;
	cout << "\n\n---------------------- RESGATAR DA POUPANÇA ----------------------" << endl << endl;
	cout << "Informe o valor desejado: " << endl;
	cin >> valor;
	
	return (valor);
}

string ContaBancaria :: getTitular(){
	return (titular);
};

string ContaBancaria :: getCpf(){
	return (cpf);
};

string ContaBancaria :: getNumero(){
	return (numero);
};

double ContaBancaria :: getSaldo(){
	return (saldo);
};

void ContaBancaria :: setTitular(string titular){
	this->titular = titular;
};

void ContaBancaria :: setCpf(string cpf){
	this->cpf = cpf;
};

void ContaBancaria :: setNumero(string numero){
	this->numero = numero;
};

void ContaBancaria :: setSaldo(double saldo){
	this->saldo = saldo;
};

int ContaBancaria :: saque(double valor){
	if (valor > saldo) {
		cout << "Saldo insuficiente. Tente novamente!" << endl;
	} else {
			saldo = saldo - valor;
			fstream extrato_FILE;
			extrato_FILE.open("extrato.txt", std::ios::app);
			time_t mytime;
		    mytime = time(NULL);
		    struct tm tm = *localtime(&mytime);
				if (extrato_FILE.is_open()) {
					extrato_FILE << "Dia " << tm.tm_mday << "/" << tm.tm_mon + 1 << "/" << tm.tm_year + 1900 << ": Você sacou R$" << valor << " -- Saldo atual: R$" << saldo << endl;
					extrato_FILE.close();
				} else {
					cout << "Falha na gravação do extrato." << endl;
					extrato_FILE.close();
				}
			cout << "..." << endl << "..." << endl << "Você sacou R$" << valor << endl;
			cout << "Saldo atual: R$" << saldo << endl;
	}
	
	int opcao=0;
	while (opcao != 1 && opcao != 2) {
		cout << "Deseja realizar outra operação?" << endl;
		cout << "1 - Sim" << endl;
		cout << "2 - Não" << endl;
		cin >> opcao;
		
		if (opcao != 1 && opcao != 2) {
			cout << "Opção inválida!" << endl;
		}
	}
	
	return (opcao);
};

int ContaBancaria :: deposito(int opcao){
	double valor=0;
	string tipo="";
	if (opcao == 1) {
		tipo = "Dinheiro";
	} else {
		tipo = "Cheque";
	}
	cout << "Informe o valor: ";
	cin >> valor;
	saldo = saldo + valor;
	
	fstream extrato_FILE;
	extrato_FILE.open("extrato.txt", std::ios::app);
	time_t mytime;
    mytime = time(NULL);
    struct tm tm = *localtime(&mytime);
		if (extrato_FILE.is_open()) {
			extrato_FILE << "Dia " << tm.tm_mday << "/" << tm.tm_mon + 1 << "/" << tm.tm_year + 1900 << ": Você depositou R$" << valor << " no " << tipo << " -- Saldo atual: R$" << saldo << endl;
			extrato_FILE.close();
		} else {
			cout << "Falha na gravação do extrato." << endl;
			extrato_FILE.close();
		}
	cout << "..." << endl << "..." << endl << "Você depositou R$" << valor << " no " << tipo << endl;
	cout << "Saldo atual: R$" << saldo << endl;
	
	int opcao2=0;
	while (opcao2 != 1 && opcao2 != 2) {
		cout << "Deseja realizar outra operação?" << endl;
		cout << "1 - Sim" << endl;
		cout << "2 - Não" << endl;
		cin >> opcao2;
		
		if (opcao2 != 1 && opcao2 != 2) {
			cout << "Opção inválida!" << endl;
		}
	}
	
	return (opcao2);
};

int ContaBancaria :: consultarSaldo(){
	cout << "O seu saldo é de: R$" << saldo << endl;
	int opcao=0;
	while (opcao != 1 && opcao != 2) {
		cout << "Deseja realizar outra operação?" << endl;
		cout << "1 - Sim" << endl;
		cout << "2 - Não" << endl;
		cin >> opcao;
		
		if (opcao != 1 && opcao != 2) {
			cout << "Opção inválida!" << endl;
		}
	}
	
	return (opcao);	
};

int ContaBancaria :: consultarExtrato(){
	cout << "---------------------- EXTRATO BANCÁRIO ----------------------" << endl;
	ifstream extrato_LEITURA;
	string line;
  	extrato_LEITURA.open("extrato.txt");
  	if (extrato_LEITURA.is_open()) {
    	while (getline(extrato_LEITURA, line)) { 
      		cout << line << endl;
    	}
    extrato_LEITURA.close();
  	} else {
  		cout << "Falha na leitura do extrato.";
  		extrato_LEITURA.close();
	}
	
	int opcao=0;
	while (opcao != 1 && opcao != 2) {
		cout << "Deseja realizar outra operação?" << endl;
		cout << "1 - Sim" << endl;
		cout << "2 - Não" << endl;
		cin >> opcao;
		
		if (opcao != 1 && opcao != 2) {
			cout << "Opção inválida!" << endl;
		}
	}
	
	return (opcao);
};

int ContaBancaria :: pagamento (double valor){
	if (valor > saldo) {
		cout << "Saldo insuficiente. Tente novamente!" << endl;
	} else {
		saldo = saldo - valor;
		string boleto;
		cout << "Informe o número do boleto: ";
		cin >> boleto;
		fstream extrato_FILE;
		extrato_FILE.open("extrato.txt", std::ios::app);
		time_t mytime;
	    mytime = time(NULL);
	    struct tm tm = *localtime(&mytime);
			if (extrato_FILE.is_open()) {
				extrato_FILE << "Dia " << tm.tm_mday << "/" << tm.tm_mon + 1 << "/" << tm.tm_year + 1900 << ": Você pagou o boleto " << boleto << " de R$ " << valor << " -- Saldo atual: R$" << saldo << endl;
				extrato_FILE.close();
			} else {
				cout << "Falha na gravação do extrato." << endl;
				extrato_FILE.close();
			}
		cout << "..." << endl << "..." << endl << "Você pagou o boleto " << boleto << " de R$ " << valor << endl;
		cout << "Saldo atual: R$" << saldo << endl;
	}

	int opcao=0;
	while (opcao != 1 && opcao != 2) {
		cout << "Deseja realizar outra operação?" << endl;
		cout << "1 - Sim" << endl;
		cout << "2 - Não" << endl;
		cin >> opcao;
		
		if (opcao != 1 && opcao != 2) {
			cout << "Opção inválida!" << endl;
		}
	}
	
	return (opcao);
}

int ContaBancaria :: transferencia() {
	string agencia;
	string conta;
	double valor;
	cout << "Informe a agência: ";
	cin >> agencia;
	cout << "Informe a conta: ";
	cin >> conta;
	cout << "Informe o valor: ";
	cin >> valor;
	
	if (valor > saldo) {
		cout << "Saldo insuficiente. Tente novamente!" << endl;
	} else { 
		saldo = saldo - valor;
		fstream extrato_FILE;
		extrato_FILE.open("extrato.txt", std::ios::app);
		time_t mytime;
	    mytime = time(NULL);
	    struct tm tm = *localtime(&mytime);
			if (extrato_FILE.is_open()) {
				extrato_FILE << "Dia " << tm.tm_mday << "/" << tm.tm_mon + 1 << "/" << tm.tm_year + 1900 << ": Você transferiu R$ " << valor << " para Agência: " << agencia << " Conta: " << conta << " -- Saldo atual: R$" << saldo << endl;
				extrato_FILE.close();
			} else {
				cout << "Falha na gravação do extrato." << endl;
				extrato_FILE.close();
			}
		cout << "..." << endl << "..." << endl << "Você transferiu R$ " << valor << " para Agência: " << agencia << " Conta: " << conta << endl;
		cout << "Saldo atual: R$" << saldo << endl;
	}
	
	int opcao=0;
	while (opcao != 1 && opcao != 2) {
		cout << "Deseja realizar outra operação?" << endl;
		cout << "1 - Sim" << endl;
		cout << "2 - Não" << endl;
		cin >> opcao;
		
		if (opcao != 1 && opcao != 2) {
			cout << "Opção inválida!" << endl;
		}
	}
	
	return (opcao);
}

void CartaoCredito :: setFatura(double valor) {
	fatura = valor;
}

void CartaoCredito :: setLimiteTotal(double valor) {
	limiteTotal = valor;
}

void CartaoCredito :: setLimiteDisponivel(double valor) {
	limiteDisponivel = valor;
}

double CartaoCredito :: getFatura() {
	return (fatura);
}

double CartaoCredito :: getLimiteTotal() {
	return (limiteTotal);
}

double CartaoCredito :: getLimiteDisponivel() {
	return (limiteDisponivel);
}

int CartaoCredito :: compraCredito() {
	string nome;
	double valor;
	cout << "Informe o nome da compra: ";
	cin >> nome;
	cout << "Informe o valor da compra: ";
	cin >> valor;
	
	if (valor > limiteDisponivel) {
		cout << "Limite Indisponível. Tente novamente!" << endl;
	} else { 
		fatura = fatura + valor;
		limiteDisponivel = limiteTotal - valor;
			
		fstream fatura_FILE;
		fatura_FILE.open("fatura.txt", std::ios::app);
		time_t mytime;
	    mytime = time(NULL);
	    struct tm tm = *localtime(&mytime);
			if (fatura_FILE.is_open()) {
				fatura_FILE << "Dia " << tm.tm_mday << "/" << tm.tm_mon + 1 << "/" << tm.tm_year + 1900 << ": Você comprou R$" << valor << " em: " << nome << " -- Fatura Atual: R$" << fatura << endl;
				fatura_FILE.close();
			} else {
				cout << "Falha na gravação do extrato." << endl;
				fatura_FILE.close();
			}
		
		cout << "..." << endl << "..." << endl << "Você comprou R$ " << valor << " em: " << nome << endl;
		cout << "Fatura Atual: R$" << fatura << endl;
	}
	
	int opcao=0;
	while (opcao != 1 && opcao != 2) {
		cout << "Deseja realizar outra operação?" << endl;
		cout << "1 - Sim" << endl;
		cout << "2 - Não" << endl;
		cin >> opcao;
		
		if (opcao != 1 && opcao != 2) {
			cout << "Opção inválida!" << endl;
		}
	}
	
	return (opcao);
}

int CartaoCredito :: consultarLimites() {
	cout << "Limite Total: R$" << limiteTotal << endl;
	cout << "Limite Disponível: R$" << limiteDisponivel << endl;
	int opcao=0;
	while (opcao != 1 && opcao != 2) {
		cout << "Deseja realizar outra operação?" << endl;
		cout << "1 - Sim" << endl;
		cout << "2 - Não" << endl;
		cin >> opcao;
		
		if (opcao != 1 && opcao != 2) {
			cout << "Opção inválida!" << endl;
		}
	}
	
	return (opcao);
}

int CartaoCredito :: consultarFatura() {
	cout << "---------------------- FATURA - CARTÃO DE CRÉDITO ----------------------" << endl;
	ifstream fatura_LEITURA;
	string line;
  	fatura_LEITURA.open("fatura.txt");
  	if (fatura_LEITURA.is_open()) {
    	while (getline(fatura_LEITURA, line)) { 
      		cout << line << endl;
    	}
    fatura_LEITURA.close();
  	} else {
  		cout << "Falha na leitura da fatura.";
  		fatura_LEITURA.close();
	}
	
	int opcao=0;
	while (opcao != 1 && opcao != 2) {
		cout << "Deseja realizar outra operação?" << endl;
		cout << "1 - Sim" << endl;
		cout << "2 - Não" << endl;
		cin >> opcao;
		
		if (opcao != 1 && opcao != 2) {
			cout << "Opção inválida!" << endl;
		}
	}
	
	return (opcao);
}

int CartaoCredito :: pagarFatura() {
	int opcao1=0;
	cout << "\n\n---------------------- PAGAR FATURA ----------------------" << endl << endl;
	while (opcao1 != 1 && opcao1 != 2) {
		cout << "Sua fatura atual é de: " << fatura << ". Deseja mesmo pagar? " << endl;
		cout << "1 - Sim" << endl;
		cout << "2 - Não" << endl;
		cin >> opcao1;
		
		if (opcao1 != 1 && opcao1 != 2) {
			cout << "Opção Inválida!" << endl;
		}		
	}
	
	if (opcao1 == 1) {
		if (fatura > saldo) {
			cout << "Saldo Insuficiente. Tente novamente!" << endl;
			return (opcao1);
		} else {
			saldo = saldo - fatura;
			double faturaAntiga = fatura;
			fatura = 0;
			fstream fatura_FILE;
			fatura_FILE.open("fatura.txt", std::ios::app);
			time_t mytime;
		    mytime = time(NULL);
		    struct tm tm = *localtime(&mytime);
				if (fatura_FILE.is_open()) {
					fatura_FILE << "Dia " << tm.tm_mday << "/" << tm.tm_mon + 1 << "/" << tm.tm_year + 1900 << ": Você pagou a fatura no valor de R$" << faturaAntiga << " -- Fatura Atual: R$" << fatura << endl;
					fatura_FILE.close();
				} else {
					cout << "Falha na gravação do extrato." << endl;
					fatura_FILE.close();
				}
				
			fstream extrato_FILE;
			extrato_FILE.open("extrato.txt", std::ios::app);
				if (extrato_FILE.is_open()) {
					extrato_FILE << "Dia " << tm.tm_mday << "/" << tm.tm_mon + 1 << "/" << tm.tm_year + 1900 << ": : Você pagou a fatura no valor de R$" << faturaAntiga << " -- Saldo atual: R$" << saldo << endl;
					extrato_FILE.close();
				} else {
					cout << "Falha na gravação do extrato." << endl;
					extrato_FILE.close();
				}	
				
			
			cout << "..." << endl << "..." << endl << "Você pagou a fatura no valor de R$" << faturaAntiga << endl;
			cout << "Fatura Atual: R$" << fatura << endl;
			
			int opcao2=0;
			while (opcao2 != 1 && opcao2 != 2) {
				cout << "Deseja realizar outra operação?" << endl;
				cout << "1 - Sim" << endl;
				cout << "2 - Não" << endl;
				cin >> opcao2;
				
				if (opcao2 != 1 && opcao2 != 2) {
					cout << "Opção inválida!" << endl;
				}
			}
			return (opcao2);
		}
	} else {
		return (opcao1);
	}
}

void ContaPoupanca :: setValorInvestido(double valor) {
	valorInvestido = valor;
}

double ContaPoupanca :: getValorInvestido() {
	return (valorInvestido);
}

int ContaPoupanca :: aplicar(double valor) {
	if (valor > saldo) {
		cout << "Saldo insuficiente. Tente novamente!" << endl;
	} else {
			saldo = saldo - valor;
			valorInvestido = valorInvestido + valor;
			fstream extrato_FILE;
			extrato_FILE.open("extrato.txt", std::ios::app);
			time_t mytime;
		    mytime = time(NULL);
		    struct tm tm = *localtime(&mytime);
				if (extrato_FILE.is_open()) {
					extrato_FILE << "Dia " << tm.tm_mday << "/" << tm.tm_mon + 1 << "/" << tm.tm_year + 1900 << ": Você aplicou R$" << valor << " na poupança" << " -- Saldo atual: R$" << saldo << endl;
					extrato_FILE.close();
				} else {
					cout << "Falha na gravação do extrato." << endl;
					extrato_FILE.close();
				}
			cout << "..." << endl << "..." << endl << "Você aplicou R$" << valor << " na poupança" << endl;
			cout << "Saldo atual: R$" << saldo << endl;
			cout << "Valor total investido: R$" << valorInvestido << endl;
	}
	
	int opcao=0;
	while (opcao != 1 && opcao != 2) {
		cout << "Deseja realizar outra operação?" << endl;
		cout << "1 - Sim" << endl;
		cout << "2 - Não" << endl;
		cin >> opcao;
		
		if (opcao != 1 && opcao != 2) {
			cout << "Opção inválida!" << endl;
		}
	}
	
	return (opcao);	
}

int ContaPoupanca :: resgatar(double valor) {
	if (valor > valorInvestido) {
		cout << "Saldo insuficiente. Tente novamente!" << endl;
	} else {
			valorInvestido = valorInvestido - valor;
			saldo = saldo + valor;
			fstream extrato_FILE;
			extrato_FILE.open("extrato.txt", std::ios::app);
			time_t mytime;
		    mytime = time(NULL);
		    struct tm tm = *localtime(&mytime);
				if (extrato_FILE.is_open()) {
					extrato_FILE << "Dia " << tm.tm_mday << "/" << tm.tm_mon + 1 << "/" << tm.tm_year + 1900 << ": Você resgatou R$" << valor << " da poupança" << " -- Saldo atual: R$" << saldo << endl;
					extrato_FILE.close();
				} else {
					cout << "Falha na gravação do extrato." << endl;
					extrato_FILE.close();
				}
			cout << "..." << endl << "..." << endl << "Você resgatou R$" << valor << " da poupança" << endl;
			cout << "Saldo atual: R$" << saldo << endl;
			cout << "Valor total investido: R$" << valorInvestido << endl;
	}
	
	int opcao=0;
	while (opcao != 1 && opcao != 2) {
		cout << "Deseja realizar outra operação?" << endl;
		cout << "1 - Sim" << endl;
		cout << "2 - Não" << endl;
		cin >> opcao;
		
		if (opcao != 1 && opcao != 2) {
			cout << "Opção inválida!" << endl;
		}
	}
	
	return (opcao);
}

int ContaPoupanca :: consultarValorInvestido() {
	cout << "Valor Investido: R$" << valorInvestido << endl;
	int opcao=0;
	while (opcao != 1 && opcao != 2) {
		cout << "Deseja realizar outra operação?" << endl;
		cout << "1 - Sim" << endl;
		cout << "2 - Não" << endl;
		cin >> opcao;
		
		if (opcao != 1 && opcao != 2) {
			cout << "Opção inválida!" << endl;
		}
	}
	
	return (opcao);
}

