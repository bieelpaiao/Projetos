#include <iostream>

using namespace std;

class Fluxos {
	public:
		int inicio();
		string* criaConta();
		int posCriaConta();
		//void entraConta();
		int menuInicial();
		int consultas();
		double saque();
		int deposito();
		int transferencia(); 
		double pagamento();
		int credito();
		int poupanca();
		int aplicar();
		int resgatar();
};

class ContaBancaria {
	public:
		string titular;
		string cpf;
		string numero;
		double saldo;
	
	public:
		string getTitular();
		string getCpf();
		string getNumero();
		double getSaldo();
		void setTitular(string titular);
		void setCpf(string cpf);
		void setNumero(string numero);
		void setSaldo(double saldo);
		int saque(double valor);
		int deposito(int opcao);
		int consultarSaldo();
		int consultarExtrato();
		int pagamento(double valor);
		int transferencia();
	
};

class CartaoCredito : public ContaBancaria {
	private:
		double fatura;
		double limiteTotal;
		double limiteDisponivel;
	public:
		void setFatura(double valor);
		void setLimiteTotal(double valor);
		void setLimiteDisponivel(double valor);
		double getFatura();
		double getLimiteTotal();
		double getLimiteDisponivel();
		int compraCredito();
		int consultarLimites();
		int consultarFatura();
		int pagarFatura();
};

class ContaPoupanca : public CartaoCredito {
	private:
		double valorInvestido;
	public:
		void setValorInvestido(double valor);
		double getValorInvestido();
		int aplicar(double valor);
		int resgatar(double valor);
		int consultarValorInvestido();
};


