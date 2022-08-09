#include "classes.h"
#include <fstream>
#include <time.h>
#include <vector>

using namespace std;

int Fluxos :: inicio() {
	int opcao=2;
	cout << "---------------------- BEM VINDO AO GABRIEL'S BANK ----------------------" << endl << endl;
	while (opcao == 2) {
		cout << "Escolha uma op��o: " << endl;
		cout << "1 - Criar conta" << endl;
		cout << "2 - Entrar na minha conta" << endl;
		cout << "3 - Sair" << endl;
		cin >> opcao;
		
		if(opcao == 2) {
			cout << "Recurso indispon�vel no momento. Tente novamente mais tarde." << endl;
		}
	}
	
	switch(opcao) {
		case 1:
		case 3:
			return(opcao);
			break;
		default:
			cout<< "Op��o Inv�lida!" << endl;
			inicio();
	}
	
}

string* Fluxos :: criaConta() {
	string titular;
	string cpf="";
	string numero="";
	static string dados[3];
	
	cout << "\n\nAgradecemos por escolher Gabriel's Bank. Voc� est� a um passo de conquistar sua conta digital: ";
	cout << "\n\nPrimeiro, informe seu nome: ";
	cin >> titular;
	while(cpf.length() != 11) {
		cout << "Agora, informe seu CPF (Somente n�meros): ";
		cin >> cpf;
		
		if (cpf.length() != 11) {
			cout << "CPF Inv�lido! Tente novamente." << endl;
		}
	}
	
	while(numero.length() != 5) {
		cout << "Por fim, escolha o n�mero da sua conta (5 d�gitos): ";
		cin >> numero;
		
		if (numero.length() != 5) {
			cout << "N�mero inv�lido! Tente novamente." << endl;
		}
	}

	cout << "\n\nPronto, a sua conta foi criada! Viu como � r�pido?" << endl;
	
	dados[0] = titular;
	dados[1] = cpf;
	dados[2] = numero;
	
	return dados;
}

int Fluxos :: posCriaConta() {
	int opcao = 0;
	while (opcao != 1 && opcao != 2) {
		cout << "\nAgora, escolha o que deseja fazer: " << endl;
		cout << "1 - Come�ar a usar a conta" << endl;
		cout << "2 - Fechar o app e voltar depois" << endl;
		cin >> opcao;
		
		if (opcao != 1 && opcao != 2) {
			cout << "Op��o Inv�lida!" << endl;
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
		cout << "Escolha um servi�o: " << endl;
		cout << "1 - Consulta" << endl;
		cout << "2 - Saque" << endl;
		cout << "3 - Dep�sito" << endl;
		cout << "4 - Transfer�ncia" << endl;
		cout << "5 - Pagamento" << endl;
		cout << "6 - Cr�dito" << endl;
		cout << "7 - Poupan�a" << endl;
		cout << "9 - Sair" << endl;
		cin >> opcao;
		
		if (opcao != 1 && opcao != 2 && opcao != 3 && opcao != 4 && opcao != 5 && opcao != 6 && opcao != 7 && opcao != 9)	{
			cout << "Op��o Inv�lida!" << endl;
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
		cout << "O que voc� deseja consultar? " << endl;
		cout << "1 - Saldo" << endl;
		cout << "2 - Extrato" << endl;
		cout << "3 - Retornar ao menu inicial" << endl;
		cin >> opcao;
		
		if (opcao != 1 && opcao != 2 && opcao != 3) {
			cout << "Op��o Inv�lida!" << endl;
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
	cout << "\n\n---------------------- DEP�SITO ----------------------" << endl << endl;
	while (opcao != 1 && opcao != 2 && opcao != 3) {
		cout << "Qual o tipo de dep�sito? " << endl;
		cout << "1 - Dinheiro" << endl;
		cout << "2 - Cheque" << endl;
		cout << "3 - Retornar ao menu inicial" << endl;
		cin >> opcao;
		
		if (opcao != 1 && opcao != 2 && opcao != 3) {
			cout << "Op��o Inv�lida!" << endl;
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
	cout << "\n\n---------------------- TRANSFER�NCIA BANC�RIA ----------------------" << endl << endl;
	while (opcao != 1 && opcao != 2 && opcao != 3) {
		cout << "Qual o banco do recebedor? " << endl;
		cout << "1 - GABRIEL'S BANK" << endl;
		cout << "2 - Outro" << endl;
		cout << "3 - Retornar ao menu inicial" << endl;
		cin >> opcao;
		
		if (opcao != 1 && opcao != 2 && opcao != 3) {
			cout << "Op��o Inv�lida!" << endl;
		}
	}
	
	return (opcao);
}

int Fluxos :: credito() {
	int opcao=0;
	cout << "\n\n---------------------- CR�DITO ----------------------" << endl << endl;
	while (opcao != 1 && opcao != 2 && opcao != 3 && opcao != 4 && opcao != 5) {
		cout << "Informe a op��o desejada: " << endl;
		cout << "1 - Compra" << endl;
		cout << "2 - Ver Fatura" << endl;
		cout << "3 - Ver Limites" << endl;
		cout << "4 - Pagar Fatura" << endl;
		cout << "5 - Retornar ao Menu Inicial" << endl;
		cin >> opcao;
		
		if (opcao != 1 && opcao != 2 && opcao != 3 && opcao != 4 && opcao != 5) {
			cout << "Op��o Inv�lida!" << endl;
		}		
	}
	
	return (opcao);
}

int Fluxos :: poupanca() {
	int opcao=0;
	cout << "\n\n---------------------- POUPAN�A ----------------------" << endl << endl;
	while (opcao != 1 && opcao != 2 && opcao != 3 && opcao != 4) {
		cout << "Informe a op��o desejada: " << endl;
		cout << "1 - Aplicar" << endl;
		cout << "2 - Resgatar" << endl;
		cout << "3 - Ver Valor Investido" << endl;
		cout << "4 - Retornar ao Menu Inicial" << endl;
		cin >> opcao;
		
		if (opcao != 1 && opcao != 2 && opcao != 3 && opcao != 4) {
			cout << "Op��o Inv�lida!" << endl;
		}		
	}
	
	return (opcao);
}

int Fluxos :: aplicar() {
	double valor;
	cout << "\n\n---------------------- APLICAR NA POUPAN�A ----------------------" << endl << endl;
	cout << "Informe o valor desejado: " << endl;
	cin >> valor;
	
	return (valor);
}

int Fluxos :: resgatar() {
	double valor;
	cout << "\n\n---------------------- RESGATAR DA POUPAN�A ----------------------" << endl << endl;
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
					extrato_FILE << "Dia " << tm.tm_mday << "/" << tm.tm_mon + 1 << "/" << tm.tm_year + 1900 << ": Voc� sacou R$" << valor << " -- Saldo atual: R$" << saldo << endl;
					extrato_FILE.close();
				} else {
					cout << "Falha na grava��o do extrato." << endl;
					extrato_FILE.close();
				}
			cout << "..." << endl << "..." << endl << "Voc� sacou R$" << valor << endl;
			cout << "Saldo atual: R$" << saldo << endl;
	}
	
	int opcao=0;
	while (opcao != 1 && opcao != 2) {
		cout << "Deseja realizar outra opera��o?" << endl;
		cout << "1 - Sim" << endl;
		cout << "2 - N�o" << endl;
		cin >> opcao;
		
		if (opcao != 1 && opcao != 2) {
			cout << "Op��o inv�lida!" << endl;
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
			extrato_FILE << "Dia " << tm.tm_mday << "/" << tm.tm_mon + 1 << "/" << tm.tm_year + 1900 << ": Voc� depositou R$" << valor << " no " << tipo << " -- Saldo atual: R$" << saldo << endl;
			extrato_FILE.close();
		} else {
			cout << "Falha na grava��o do extrato." << endl;
			extrato_FILE.close();
		}
	cout << "..." << endl << "..." << endl << "Voc� depositou R$" << valor << " no " << tipo << endl;
	cout << "Saldo atual: R$" << saldo << endl;
	
	int opcao2=0;
	while (opcao2 != 1 && opcao2 != 2) {
		cout << "Deseja realizar outra opera��o?" << endl;
		cout << "1 - Sim" << endl;
		cout << "2 - N�o" << endl;
		cin >> opcao2;
		
		if (opcao2 != 1 && opcao2 != 2) {
			cout << "Op��o inv�lida!" << endl;
		}
	}
	
	return (opcao2);
};

int ContaBancaria :: consultarSaldo(){
	cout << "O seu saldo � de: R$" << saldo << endl;
	int opcao=0;
	while (opcao != 1 && opcao != 2) {
		cout << "Deseja realizar outra opera��o?" << endl;
		cout << "1 - Sim" << endl;
		cout << "2 - N�o" << endl;
		cin >> opcao;
		
		if (opcao != 1 && opcao != 2) {
			cout << "Op��o inv�lida!" << endl;
		}
	}
	
	return (opcao);	
};

int ContaBancaria :: consultarExtrato(){
	cout << "---------------------- EXTRATO BANC�RIO ----------------------" << endl;
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
		cout << "Deseja realizar outra opera��o?" << endl;
		cout << "1 - Sim" << endl;
		cout << "2 - N�o" << endl;
		cin >> opcao;
		
		if (opcao != 1 && opcao != 2) {
			cout << "Op��o inv�lida!" << endl;
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
		cout << "Informe o n�mero do boleto: ";
		cin >> boleto;
		fstream extrato_FILE;
		extrato_FILE.open("extrato.txt", std::ios::app);
		time_t mytime;
	    mytime = time(NULL);
	    struct tm tm = *localtime(&mytime);
			if (extrato_FILE.is_open()) {
				extrato_FILE << "Dia " << tm.tm_mday << "/" << tm.tm_mon + 1 << "/" << tm.tm_year + 1900 << ": Voc� pagou o boleto " << boleto << " de R$ " << valor << " -- Saldo atual: R$" << saldo << endl;
				extrato_FILE.close();
			} else {
				cout << "Falha na grava��o do extrato." << endl;
				extrato_FILE.close();
			}
		cout << "..." << endl << "..." << endl << "Voc� pagou o boleto " << boleto << " de R$ " << valor << endl;
		cout << "Saldo atual: R$" << saldo << endl;
	}

	int opcao=0;
	while (opcao != 1 && opcao != 2) {
		cout << "Deseja realizar outra opera��o?" << endl;
		cout << "1 - Sim" << endl;
		cout << "2 - N�o" << endl;
		cin >> opcao;
		
		if (opcao != 1 && opcao != 2) {
			cout << "Op��o inv�lida!" << endl;
		}
	}
	
	return (opcao);
}

int ContaBancaria :: transferencia() {
	string agencia;
	string conta;
	double valor;
	cout << "Informe a ag�ncia: ";
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
				extrato_FILE << "Dia " << tm.tm_mday << "/" << tm.tm_mon + 1 << "/" << tm.tm_year + 1900 << ": Voc� transferiu R$ " << valor << " para Ag�ncia: " << agencia << " Conta: " << conta << " -- Saldo atual: R$" << saldo << endl;
				extrato_FILE.close();
			} else {
				cout << "Falha na grava��o do extrato." << endl;
				extrato_FILE.close();
			}
		cout << "..." << endl << "..." << endl << "Voc� transferiu R$ " << valor << " para Ag�ncia: " << agencia << " Conta: " << conta << endl;
		cout << "Saldo atual: R$" << saldo << endl;
	}
	
	int opcao=0;
	while (opcao != 1 && opcao != 2) {
		cout << "Deseja realizar outra opera��o?" << endl;
		cout << "1 - Sim" << endl;
		cout << "2 - N�o" << endl;
		cin >> opcao;
		
		if (opcao != 1 && opcao != 2) {
			cout << "Op��o inv�lida!" << endl;
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
		cout << "Limite Indispon�vel. Tente novamente!" << endl;
	} else { 
		fatura = fatura + valor;
		limiteDisponivel = limiteTotal - valor;
			
		fstream fatura_FILE;
		fatura_FILE.open("fatura.txt", std::ios::app);
		time_t mytime;
	    mytime = time(NULL);
	    struct tm tm = *localtime(&mytime);
			if (fatura_FILE.is_open()) {
				fatura_FILE << "Dia " << tm.tm_mday << "/" << tm.tm_mon + 1 << "/" << tm.tm_year + 1900 << ": Voc� comprou R$" << valor << " em: " << nome << " -- Fatura Atual: R$" << fatura << endl;
				fatura_FILE.close();
			} else {
				cout << "Falha na grava��o do extrato." << endl;
				fatura_FILE.close();
			}
		
		cout << "..." << endl << "..." << endl << "Voc� comprou R$ " << valor << " em: " << nome << endl;
		cout << "Fatura Atual: R$" << fatura << endl;
	}
	
	int opcao=0;
	while (opcao != 1 && opcao != 2) {
		cout << "Deseja realizar outra opera��o?" << endl;
		cout << "1 - Sim" << endl;
		cout << "2 - N�o" << endl;
		cin >> opcao;
		
		if (opcao != 1 && opcao != 2) {
			cout << "Op��o inv�lida!" << endl;
		}
	}
	
	return (opcao);
}

int CartaoCredito :: consultarLimites() {
	cout << "Limite Total: R$" << limiteTotal << endl;
	cout << "Limite Dispon�vel: R$" << limiteDisponivel << endl;
	int opcao=0;
	while (opcao != 1 && opcao != 2) {
		cout << "Deseja realizar outra opera��o?" << endl;
		cout << "1 - Sim" << endl;
		cout << "2 - N�o" << endl;
		cin >> opcao;
		
		if (opcao != 1 && opcao != 2) {
			cout << "Op��o inv�lida!" << endl;
		}
	}
	
	return (opcao);
}

int CartaoCredito :: consultarFatura() {
	cout << "---------------------- FATURA - CART�O DE CR�DITO ----------------------" << endl;
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
		cout << "Deseja realizar outra opera��o?" << endl;
		cout << "1 - Sim" << endl;
		cout << "2 - N�o" << endl;
		cin >> opcao;
		
		if (opcao != 1 && opcao != 2) {
			cout << "Op��o inv�lida!" << endl;
		}
	}
	
	return (opcao);
}

int CartaoCredito :: pagarFatura() {
	int opcao1=0;
	cout << "\n\n---------------------- PAGAR FATURA ----------------------" << endl << endl;
	while (opcao1 != 1 && opcao1 != 2) {
		cout << "Sua fatura atual � de: " << fatura << ". Deseja mesmo pagar? " << endl;
		cout << "1 - Sim" << endl;
		cout << "2 - N�o" << endl;
		cin >> opcao1;
		
		if (opcao1 != 1 && opcao1 != 2) {
			cout << "Op��o Inv�lida!" << endl;
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
					fatura_FILE << "Dia " << tm.tm_mday << "/" << tm.tm_mon + 1 << "/" << tm.tm_year + 1900 << ": Voc� pagou a fatura no valor de R$" << faturaAntiga << " -- Fatura Atual: R$" << fatura << endl;
					fatura_FILE.close();
				} else {
					cout << "Falha na grava��o do extrato." << endl;
					fatura_FILE.close();
				}
				
			fstream extrato_FILE;
			extrato_FILE.open("extrato.txt", std::ios::app);
				if (extrato_FILE.is_open()) {
					extrato_FILE << "Dia " << tm.tm_mday << "/" << tm.tm_mon + 1 << "/" << tm.tm_year + 1900 << ": : Voc� pagou a fatura no valor de R$" << faturaAntiga << " -- Saldo atual: R$" << saldo << endl;
					extrato_FILE.close();
				} else {
					cout << "Falha na grava��o do extrato." << endl;
					extrato_FILE.close();
				}	
				
			
			cout << "..." << endl << "..." << endl << "Voc� pagou a fatura no valor de R$" << faturaAntiga << endl;
			cout << "Fatura Atual: R$" << fatura << endl;
			
			int opcao2=0;
			while (opcao2 != 1 && opcao2 != 2) {
				cout << "Deseja realizar outra opera��o?" << endl;
				cout << "1 - Sim" << endl;
				cout << "2 - N�o" << endl;
				cin >> opcao2;
				
				if (opcao2 != 1 && opcao2 != 2) {
					cout << "Op��o inv�lida!" << endl;
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
					extrato_FILE << "Dia " << tm.tm_mday << "/" << tm.tm_mon + 1 << "/" << tm.tm_year + 1900 << ": Voc� aplicou R$" << valor << " na poupan�a" << " -- Saldo atual: R$" << saldo << endl;
					extrato_FILE.close();
				} else {
					cout << "Falha na grava��o do extrato." << endl;
					extrato_FILE.close();
				}
			cout << "..." << endl << "..." << endl << "Voc� aplicou R$" << valor << " na poupan�a" << endl;
			cout << "Saldo atual: R$" << saldo << endl;
			cout << "Valor total investido: R$" << valorInvestido << endl;
	}
	
	int opcao=0;
	while (opcao != 1 && opcao != 2) {
		cout << "Deseja realizar outra opera��o?" << endl;
		cout << "1 - Sim" << endl;
		cout << "2 - N�o" << endl;
		cin >> opcao;
		
		if (opcao != 1 && opcao != 2) {
			cout << "Op��o inv�lida!" << endl;
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
					extrato_FILE << "Dia " << tm.tm_mday << "/" << tm.tm_mon + 1 << "/" << tm.tm_year + 1900 << ": Voc� resgatou R$" << valor << " da poupan�a" << " -- Saldo atual: R$" << saldo << endl;
					extrato_FILE.close();
				} else {
					cout << "Falha na grava��o do extrato." << endl;
					extrato_FILE.close();
				}
			cout << "..." << endl << "..." << endl << "Voc� resgatou R$" << valor << " da poupan�a" << endl;
			cout << "Saldo atual: R$" << saldo << endl;
			cout << "Valor total investido: R$" << valorInvestido << endl;
	}
	
	int opcao=0;
	while (opcao != 1 && opcao != 2) {
		cout << "Deseja realizar outra opera��o?" << endl;
		cout << "1 - Sim" << endl;
		cout << "2 - N�o" << endl;
		cin >> opcao;
		
		if (opcao != 1 && opcao != 2) {
			cout << "Op��o inv�lida!" << endl;
		}
	}
	
	return (opcao);
}

int ContaPoupanca :: consultarValorInvestido() {
	cout << "Valor Investido: R$" << valorInvestido << endl;
	int opcao=0;
	while (opcao != 1 && opcao != 2) {
		cout << "Deseja realizar outra opera��o?" << endl;
		cout << "1 - Sim" << endl;
		cout << "2 - N�o" << endl;
		cin >> opcao;
		
		if (opcao != 1 && opcao != 2) {
			cout << "Op��o inv�lida!" << endl;
		}
	}
	
	return (opcao);
}

