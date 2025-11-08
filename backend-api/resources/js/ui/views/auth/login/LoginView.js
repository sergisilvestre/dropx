import { ref } from "vue";
import { useRouter } from "vue-router";
import { LoginUseCase } from "@/application/usecases/LoginUseCase";
import { HttpAuthRepository } from "@/infrastructure/repositories/HttpAuthRepository";

export default {
    setup() {
        const router = useRouter();
        const email = ref("admin@example.com");
        const password = ref("password");
        const loading = ref(false);
        const error = ref("");
        const success = ref("");

        const loginUseCase = new LoginUseCase(new HttpAuthRepository());

        const login = async () => {
            error.value = "";
            success.value = "";
            loading.value = true;

            try {
                const user = await loginUseCase.execute(email.value, password.value);
                localStorage.setItem("auth_token", user.token); 
                router.push({ name: "Home" });
            } catch (e) {
                error.value = e.message;
            } finally {
                loading.value = false;
            }
        };        

        return {
            email,
            password,
            loading,
            error,
            success,
            login,
        };
    },
};
